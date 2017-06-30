<?php

namespace Esprit\FamycityBundle\Controller;

use Esprit\FamycityBundle\Entity\Course;
use Esprit\FamycityBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Serializer\SerializerInterface;

class CourseController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }



    public function affichePageCreateAction( )
    {









            return $this-> render('EspritFamycityBundle:Course:PageCreationCourse.html.twig');




    }



    public function ajoutCourseAction(Request $request){



        if ($request->getMethod() == Request::METHOD_POST) {
            $name = $request->request->get('nom');
            $budget = $request->request->get('budget');
            $description = $request->request->get('description');
            $adresse = $request->request->get('adresse');
            $date = $request->request->get('date');


            $timestamp = strtotime($date);
            $new_date = date('Y-m-d',$timestamp );

             $c = new Course();

            $c->setNom($name);
            $c->setDescription($description);
            $c->setBudget($budget);
            $c->setAdresse($adresse);
            $c->setCourseDate($new_date);
            $c->setStatus("En Attente");



            $usr= $this->get('security.token_storage')->getToken()->getUser();


            $em = $this->getDoctrine()->getManager();
            $c->setCreateur($usr);


            $em->persist($c);
            $em->flush();



            $em=$this->getDoctrine()->getManager();
            $modeles=$em->getRepository('EspritFamycityBundle:Course')->findAll();






            return $this-> render('@EspritFamycity/Course/succes.html.twig',array('m'=>$modeles));




        }


        return $this-> render('EspritFamycityBundle:Course:PageCreationCourse.html.twig');




    }




    public function afficherCourseAction()
    {


        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('EspritFamycityBundle:Course')->findAllCoursesOnhold();





        return $this-> render('EspritFamycityBundle:Course:affichierCourse.html.twig',array('m'=>$modeles));


    }




    public function afficherCourseValiderAction()
    {


        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('EspritFamycityBundle:Course')->findAllCoursesValid();





        return $this-> render('EspritFamycityBundle:Course:afficherCourseValid.html.twig',array('m'=>$modeles));


    }



    public function afficherCourseAuthorizedrAction()
    {


        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('EspritFamycityBundle:Course')->findAllCoursesAuhtorized();






        return $this-> render('@EspritFamycity/Course/afficherCourseAuthorized.html.twig',array('m'=>$modeles));


    }


    public function afficherMesCourseEncoursAction()
    {


        $em=$this->getDoctrine()->getManager();

        $usr= $this->get('security.token_storage')->getToken()->getUser();

        $modeles=$em->getRepository('EspritFamycityBundle:Course')->findMesCoursesEncours($usr->getId());




        return $this-> render('@EspritFamycity/Course/mesCourseEncours.html.twig',array('m'=>$modeles));


    }





    public function takeCourseAction($idCourse)
    {

        $em = $this->getDoctrine()->getManager();
        $models = $em->getRepository('EspritFamycityBundle:Course')->find($idCourse);


        $usr= $this->get('security.token_storage')->getToken()->getUser();

        $models->setCoursier($usr);
        $models->setStatus("En Cours");
        $em->merge($models);
        $em->flush();





        return $this->redirectToRoute('affichiercourse');


    }



    public function finirCourseAction($idCourse)
    {

        $em = $this->getDoctrine()->getManager();
        $models = $em->getRepository('EspritFamycityBundle:Course')->find($idCourse);


        $models->setStatus("Valid");
        $em->merge($models);
        $em->flush();





        return $this->redirectToRoute('affichierMesCourseEncours');


    }


    public function deleteCourseAction($idCourse)
    {

        $em = $this->getDoctrine()->getManager();
        $models = $em->getRepository('EspritFamycityBundle:Course')->find($idCourse);



        $em->remove($models);
        $em->flush();


        return $this->redirectToRoute('affichiercourse');


    }


    public function statistiqueCourseAction()
    {

        $em = $this->getDoctrine()->getManager();
        $count = $em->getRepository('EspritFamycityBundle:Course')->countCourses();
        $user = $em->getRepository('EspritFamycityBundle:User')->findAll();

        foreach ($user as $u)
        {
            $countUser = $em->getRepository('EspritFamycityBundle:Course')->countCoursesByUser($u->getId());
            $u->setNbCourse($countUser);

        }




        return $this-> render('@EspritFamycity/Course/CourseStat.html.twig',array('ct'=>$count,'us'=>$user));


    }



    public function generatePdfAction()
    {


        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('EspritFamycityBundle:Course')->findAllCoursesAuhtorized();




        $html = $this->renderView('@EspritFamycity/Course/pdfpage.html.twig',array('m'=>$modeles));
        $pdfGenerator = $this->get('spraed.pdf.generator');


        return new Response($pdfGenerator->generatePDF($html, 'UTF-8'),
            200,
            array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="out.pdf"'
            )
        );



    }



}

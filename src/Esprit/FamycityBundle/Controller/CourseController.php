<?php

namespace Esprit\FamycityBundle\Controller;

use Esprit\FamycityBundle\Entity\Course;
use Esprit\FamycityBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class CourseController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }



    public function affichePageCreateAction()
    {

        /*
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        $usr = "mehdi";
        $us=new User();
        $em=$this->getDoctrine()->getManager();
        $us=$em->getRepository('EspritFamycityBundle:User')
            ->findUserByName($usr);

        $em->flush();
        return $this->redirectToRoute("/createCourse");


                 try {
                  }
                  catch (\Doctrine\ORM\ORMException $e){
                      return $this->redirectToRoute("/invalidRight");

                  }

            */



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

            $user = new User();
            $user->setNom("mehdi");
            $user->setId(1);
            $user->setPrenom("lakhdar");
            $user->setImage('../mah.jpg');


            $em = $this->getDoctrine()->getManager();
            $c->setCreateur($em->getReference('EspritFamycityBundle:User',1));




            $em->persist($c);
            $em->flush();








            $em=$this->getDoctrine()->getManager();
            $modeles=$em->getRepository('EspritFamycityBundle:Course')->findAll();

            foreach ($modeles as $a){
                $a->setCreateur($user);

            }


            return $this-> render('@EspritFamycity/Course/succes.html.twig',array('m'=>$modeles));




        }


        return $this-> render('EspritFamycityBundle:Course:PageCreationCourse.html.twig');




    }




    public function afficherCourseAction()
    {


        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('EspritFamycityBundle:Course')->findAllCoursesOnhold();


        $user = new User();
        $user->setNom("mehdi");
        $user->setId(1);
        $user->setPrenom("lakhdar");
        $user->setImage('../mah.jpg');


        foreach ($modeles as $a){
            $a->setCreateur($user);


        }


        return $this-> render('EspritFamycityBundle:Course:affichierCourse.html.twig',array('m'=>$modeles));


    }




    public function afficherCourseValiderAction()
    {


        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('EspritFamycityBundle:Course')->findAllCoursesValid();


        $user = new User();
        $user->setNom("mehdi");
        $user->setId(1);
        $user->setPrenom("lakhdar");
        $user->setImage('../mah.jpg');

        $u=$em->getRepository('EspritFamycityBundle:User')->find(1);
        $u->setImage('../mah.jpg');


        foreach ($modeles as $a){
            $a->setCreateur($user);
            $a->setCoursier($user);




        }


        return $this-> render('@EspritFamycity/Course/afficherCourseValid.html.twig',array('m'=>$modeles));


    }

    public function takeCourseAction($idCourse)
    {

        $em = $this->getDoctrine()->getManager();
        $models = $em->getRepository('EspritFamycityBundle:Course')->find($idCourse);
/*
        $session = new Session();
        $session->start();



        $session->set('user', $user);
*/




        $em=$this->getDoctrine()->getManager();
        $s=$em->getRepository('EspritFamycityBundle:User')->find(1);

        $models->setCoursier($em->getReference('EspritFamycityBundle:User',1));
        $models->setStatus("valider");
        $em->merge($models);
        $em->flush();





        return $this->redirectToRoute('affichiercourse');


    }





}

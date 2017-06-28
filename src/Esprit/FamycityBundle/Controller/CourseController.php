<?php

namespace Esprit\FamycityBundle\Controller;

use Esprit\FamycityBundle\Entity\Course;
use Esprit\FamycityBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

            $em = $this->getDoctrine()->getManager();

            $em->persist($c);
            $em->flush();

            return $this-> render('succes.html.twig');

        }


        return $this-> render('EspritFamycityBundle:Course:PageCreationCourse.html.twig');




    }
}

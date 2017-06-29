<?php

namespace Esprit\FamycityBundle\Controller;

use Esprit\FamycityBundle\Entity\TimeLinePostes;
use Esprit\FamycityBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TimeLinePostsController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }



    public function affichePageCreateAction()
    {




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



            $user = new User();
            $user->setNom("mehdi");
            $user->setId(1);
            $user->setPrenom("lakhdar");
            $user->setImage('../mah.jpg');



            $em=$this->getDoctrine()->getManager();
            $modeles=$em->getRepository('EspritFamycityBundle:Course')->findAll();

            foreach ($modeles as $a){
                $a->setCreateur($user);

            }


            return $this-> render('@EspritFamycity/Course/succes.html.twig',array('m'=>$modeles));




        }


        return $this-> render('EspritFamycityBundle:Course:PageCreationCourse.html.twig');




    }
}
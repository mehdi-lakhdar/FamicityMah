<?php
/**
 * Created by PhpStorm.
 * User: LeNovo
 * Date: 28/06/2017
 * Time: 20:27
 */

namespace Esprit\FamycityBundle\Controller;
use Esprit\FamycityBundle\Entity;
use Esprit\FamycityBundle\Form\EventType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

class EventController extends Controller
{



    public function addEventsAction()
    {

        return $this->render("@EspritFamycity/Events/AddEvent2.html.twig");
    }

    public function testAction()
    {
        $em=$this->getDoctrine()->getManager();
        $count= $em->getRepository("EspritFamycityBundle:Event")->countEvent();

        $event=$em->getRepository("EspritFamycityBundle:Event")->findEvent();



        return $this->render("@EspritFamycity/Events/test.html.twig",array('count'=>$count,'e'=>$event));



    }


    public function persistEventAction(Request $request)  {



        if ($request->getMethod() == Request::METHOD_POST) {
            $libelle = $request->request->get('libelle');
            $cost = $request->request->get('cost');
            $categorie = $request->request->get('categorie');
            $lieu = $request->request->get('lieu');
            $datedeb = $request->request->get('dateDebut');
            $datefin = $request->request->get('dateFin');

            $date = $request->request->get('date');

            $image=$request->request->get('image');
            $description =$request->request->get('description');


            $event = new Entity\Event();

            $event->setLibelle($libelle);
            $event->setCategorie($categorie);
            $event->setCost($cost);
            $event->setLieu($lieu);
            $event->setImage($image);

            //$event->setDateDebut(new Date($datedeb));
            //$event->setDateFin(new Date($datefin));

            $event->setDateDebut($date);
            $event->setDateFin($date);
            $event->setDescription($description);

            $em = $this->getDoctrine()->getManager();

            $em->persist($event);
            $em->flush();



            $user = new Entity\User();
            $user->setNom("ons");
            $user->setId(2);
            $user->setPrenom("mm");
            $user->setImage('../logo.png');



            $em=$this->getDoctrine()->getManager();
            $modeles=$em->getRepository('EspritFamycityBundle:Event')->findAll();

            foreach ($modeles as $a){
                $a->setAddUser($user);

            }


            return $this-> render('@EspritFamycity/Events/Result.html.twig',array('m'=>$modeles));




        }


        return $this-> render('EspritFamycityBundle:Events:ShowEvents.html.twig');




    }


    public function deleteEventAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $event= $em->getRepository("EspritFamycityBundle:Event")->find($id);
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute('testpage');
    }

public function updateEventAction(Request $request,$id)
{
    $em=$this->getDoctrine()->getManager();
    $event= $em->getRepository("EspritFamycityBundle:Event")->find($id);
    return $this->render("@EspritFamycity/Events/UpdateEvent.html.twig",array('e'=>$event));

}

    public function SaveupdatedEventAction(Request $request)
    {
        if ($request->getMethod() == Request::METHOD_POST) {
            $id = $request->request->get('id');
            $libelle = $request->request->get('libelle');
            $cost = $request->request->get('cost');
            $categorie = $request->request->get('categorie');
            $lieu = $request->request->get('lieu');
            $datedeb = $request->request->get('dateDebut');
            $datefin = $request->request->get('dateFin');

            $date = $request->request->get('date');

            $image=$request->request->get('image');
            $description =$request->request->get('description');


            $em=$this->getDoctrine()->getManager();
            $event= $em->getRepository("EspritFamycityBundle:Event")->find($id);

            $event->setLibelle($libelle);
            $event->setCategorie($categorie);
            $event->setCost($cost);
            $event->setLieu($lieu);
            $event->setImage($image);

            //$event->setDateDebut(new Date($datedeb));
            //$event->setDateFin(new Date($datefin));

            $event->setDateDebut($date);
            $event->setDateFin($date);
            $event->setDescription($description);



            $em->merge($event);
            $em->flush();



        $user = new Entity\User();
        $user->setNom("ons");
        $user->setId(2);
        $user->setPrenom("mm");
        $user->setImage('../logo.png');

    }


        $em=$this->getDoctrine()->getManager();
        $count= $em->getRepository("EspritFamycityBundle:Event")->countEvent();

        $event=$em->getRepository("EspritFamycityBundle:Event")->findEvent();


        return $this->render("@EspritFamycity/Events/test.html.twig",array('count'=>$count,'e'=>$event));




    }

    public function listAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "select a  from EspritFamycityBundle:Event a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );

        // parameters to template
        return $this->render('@EspritFamycity/Events/list.html.twig', array('pagination' => $pagination));



    }


}
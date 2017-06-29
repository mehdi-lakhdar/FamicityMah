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

class EventController extends Controller
{
public function findEventDQLAction()
{
    $em=$this->getDoctrine()->getManager();
    $event=$em->getRepository("EspritFamycityBundle:Event")->findEvent();
    return $this->render("@EspritFamycity/Events/ShowEvents.html.twig",array('e'=>$event));
}

public function addEventAction(Request $request)
{
    $Event= new Entity\Event();
 $form = $this->createForm(EventType::class,$Event);
 $form->handleRequest($request);
 if ($form->isValid()){
     $em=$this->getDoctrine()->getManager();
     $em->persist($Event);
     $em->flush();
     return $this->redirectToRoute('AfficheEvent');
 }
 return $this->render("@EspritFamycity/Events/AddEvent.html.twig",array('form'=>$form->createView()));
}


    public function addEventsAction()
    {

        return $this->render("@EspritFamycity/Events/AddEvent2.html.twig");
    }


    public function persistEventAction(Request $request){



        if ($request->getMethod() == Request::METHOD_POST) {
            $name = $request->request->get('libelle');
            $budget = $request->request->get('cost');
            $description = $request->request->get('categorie');

            $date = $request->request->get('date');




            $c = new Entity\Event();

            $c->setLibelle($name);
            $c->setCategorie($description);
            $c->setCost($budget);

            $c->setDateDebut($date);
            $c->setDateFin($date);
            $em = $this->getDoctrine()->getManager();

            $em->persist($c);
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

}
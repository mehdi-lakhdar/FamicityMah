<?php
/**
 * Created by PhpStorm.
 * User: LeNovo
 * Date: 28/06/2017
 * Time: 20:27
 */

namespace Esprit\FamycityBundle\Controller;
use Esprit\FamycityBundle\Entity;
use Esprit\FamycityBundle\Form\EventForm;
use Esprit\FamycityBundle\Form\EventType;
use Esprit\FamycityBundle\Repository;
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

}
<?php
/**
 * Created by PhpStorm.
 * User: LeNovo
 * Date: 28/06/2017
 * Time: 20:27
 */

namespace Esprit\FamycityBundle\Controller;

use Esprit\FamycityBundle\Repository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventController extends Controller
{
public function findEventDQLAction()
{
    $em=$this->getDoctrine()->getManager();
    $event=$em->getRepository("EspritFamycityBundle:Event")->findEvent();
    return $this->render("@EspritFamycity/Events/ShowEvents.html.twig",array('e'=>$event));
}



}
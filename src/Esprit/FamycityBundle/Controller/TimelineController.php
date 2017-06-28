<?php

namespace Esprit\FamycityBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\FamycityBundle\Entity\Publication;
use Esprit\FamycityBundle\Entity\Commentaires;
use Zend\Json\Expr;

/**
 * Class TimelineController
 * @package Esprit\FamycityBundle\Controller
 *
 * @RouteResource("post")
 */
class TimelineController extends FOSRestController implements ClassResourceInterface
{
    public function getAction(int $id)
    {
       // return $this->getDoctrine()->getRepository('EspritFamycityBundle:Publication')->find($id) ;

    return $this->get('crv.doctrine_entity_repository.fam_post')->findByIdQuery($id)->getSingleResult();

    }
}

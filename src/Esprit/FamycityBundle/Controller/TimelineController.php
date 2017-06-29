<?php

namespace Esprit\FamycityBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\FamycityBundle\Entity\Commentaires;
use Zend\Json\Expr;
use Esprit\FamycityBundle\Entity\BlogPost;
use Esprit\FamycityBundle\Repository\BlogPostRepository;
use Esprit\FamycityBundle\Form\Type\BlogPostType;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\View\RouteRedirectView;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * Class TimelineController
 * @package Esprit\FamycityBundle\Controller
 *
 * @RouteResource("pub")
 */
class TimelineController extends FOSRestController implements ClassResourceInterface
{
    public function getAction(int $id)
    {

        return $this->get('crv.doctrine_entity_repository.fam_post')->creatFindOneById($id)->getSingleResult();

    }
    public function cgetAction()
    {

        return $this->get('crv.doctrine_entity_repository.fam_post')->creatFindAllById()->getResult();

    }



}

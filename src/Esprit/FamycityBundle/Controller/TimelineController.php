<?php

namespace Esprit\FamycityBundle\Controller;

use Esprit\FamycityBundle\Entity\Publication;
use Esprit\FamycityBundle\Repository\PublicationRepository;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\FamycityBundle\Entity\Commentaires;
use Zend\Json\Expr;
use Esprit\FamycityBundle\Entity\BlogPost;
use Esprit\FamycityBundle\Repository\BlogPostRepository;
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
    /**
     * Get One Post
     * @param int $id
     * @return mixed
     *
     * @throws \Doctrine\ORM\NoResultException
     * @throws  \Doctrine\ORM\NonUniqueResultException
     *
     * @ApiDoc(
     *     output="Esprit\FamycityBundle\Entity\Publication",
     *     statusCodes={
     *          200 = "Returned when successful",
     *          404 = "Returned when not found"
     *      }
     *    )
     */
    public function getAction(int $id)
    {

        return $this->GetPostsWithService()->creatFindOneById($id)->getSingleResult();

    }
    /**
     * Get a collection Of Posts
     * @param int $id
     * @return mixed
     *
     * @throws \Doctrine\ORM\NoResultException
     * @throws  \Doctrine\ORM\NonUniqueResultException
     *
     * @ApiDoc(
     *     output="Esprit\FamycityBundle\Entity\Publication",
     *     statusCodes={
     *          200 = "Returned when successful",
     *          404 = "Returned when not found"
     *      }
     *    )
     */
    public function cgetAction()
    {

        return $this->GetPostsWithService()->creatFindAllById()->getResult();

    }

    /**
     * @param Request $request
     * @return View|\Symfony\Component\Form\Form
     *
     * @ApiDoc(
     *     input="Esprit\FamycityBundle\Form\Type\PublicationType",
     *     output="Esprit\FamycityBundle\Entity\Publication",
     *     statusCodes={
     *          201 = "Returned when A new Timeline Post has been Created",
     *          404 = "Returned when not found"
     *      }
     *    )
     */

    public function postAction(Request $request)
    {
        $form = $this->createForm(Publication::class,null,[
            'csrf_protection' => false,
        ]);

        $form->submit($request->request->all()) ;

        if(!$form->isValid()){
            return $form ;
        }
        /**
         * @var $timeLinePosts Publication
         */
        $timeLinePosts = $form->getData() ;
        if($timeLinePosts==null){
            return new View(null,Response::CURLE_HTTP_NOT_FOUND);
        }

        $em = $this->getDoctrine()->getManager() ;
        $em->persist($timeLinePosts) ;
        $em->flush() ;

            $routeOptions = [
                'id'=>$timeLinePosts->getIdPublication() ,
                '_format' =>$request->get('_format')
            ] ;

        return $this->routeRedirectView('get_post',$routeOptions,Response::HTTP_CREATED) ;
    }
    /**
     * @param Request $request
     * @return View|\Symfony\Component\Form\Form
     *
     * @ApiDoc(
     *     input="Esprit\FamycityBundle\Form\Type\PublicationType",
     *     output="Esprit\FamycityBundle\Entity\Publication",
     *     statusCodes={
     *          204 = "Returned when an Existing Post Has been Successfully updated",
     *          404 = "Returned when not found",
     *          400 = "Return when errors"
     *      }
     *    )
     */
    public function putAction(Request $request, int $id)
    {
        /**
         * @var $timeLinePosts Publication
         */
        $timeLinePosts = $this->GetPostsWithService()->creatFindOneById($id) ;
        if($timeLinePosts==null){
            return new View(null,Response::CURLE_HTTP_NOT_FOUND);
        }
        $form = $this->createForm(Publication::class,$timeLinePosts,[
            'csrf_protection' => false,
        ]);

        $form->submit($request->request->all()) ;

        if(!$form->isValid()){
            return $form ;
        }

        $em = $this->getDoctrine()->getManager() ;

        $em->flush() ;

        $routeOptions = [
            'id'=>$timeLinePosts->getIdPublication() ,
            '_format' =>$request->get('_format')
        ] ;

        return $this->routeRedirectView('get_post',$routeOptions,Response::HTTP_NO_CONTENT) ;

    }

    /**
     * @param Request $request
     * @return View|\Symfony\Component\Form\Form
     *
     * @ApiDoc(
     *     input="Esprit\FamycityBundle\Form\Type\PublicationType",
     *     output="Esprit\FamycityBundle\Entity\Publication",
     *     statusCodes={
     *          204 = "Returned when an Existing Post Has been Successfully updated",
     *          404 = "Returned when not found",
     *          400 = "Return when errors"
     *      }
     *    )
     */
    public function patchAction(Request $request, int $id)
    {
        /**
         * @var $timeLinePosts Publication
         */
        $timeLinePosts = $this->GetPostsWithService()->creatFindOneById($id) ;
        if($timeLinePosts==null){
            return new View(null,Response::CURLE_HTTP_NOT_FOUND);
        }
        $form = $this->createForm(Publication::class,$timeLinePosts,[
            'csrf_protection' => false,
        ]);

        $form->submit($request->request->all(),false) ;

        if(!$form->isValid()){
            return $form ;
        }

        $em = $this->getDoctrine()->getManager() ;

        $em->flush() ;

        $routeOptions = [
            'id'=>$timeLinePosts->getIdPublication() ,
            '_format' =>$request->get('_format')
        ] ;

        return $this->routeRedirectView('get_post',$routeOptions,Response::HTTP_NO_CONTENT) ;

    }

    /**
     * @param Request $request
     * @return View|\Symfony\Component\Form\Form
     *
     * @ApiDoc(
     *     input="Esprit\FamycityBundle\Form\Type\PublicationType",
     *     output="Esprit\FamycityBundle\Entity\Publication",
     *     statusCodes={
     *          201 = "Returned when A new Timeline Post has been Deleted",
     *          404 = "Returned when not found"
     *      }
     *    )
     */
    public function deleteAction(int $id){

        /**
         * @var $timeLinePosts Publication
         */
        $timeLinePosts = $this->GetPostsWithService()->creatFindOneById($id) ;

        if($timeLinePosts==null){
            return new View(null,Response::CURLE_HTTP_NOT_FOUND);
        }

        $em= $this->getDoctrine()->getManager() ;
        $em->remove($timeLinePosts) ;
        $em->flush() ;
        return new View(null,Response::HTTP_NO_CONTENT) ;

    }
    /**
     * @return PublicationRepository
     */
    public function GetPostsWithService()
    {
        return $this->get('crv.doctrine_entity_repository.fam_post');
    }


}

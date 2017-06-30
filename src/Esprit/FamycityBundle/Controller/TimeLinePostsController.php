<?php

namespace Esprit\FamycityBundle\Controller;

use Esprit\FamycityBundle\Entity\Commentaires;
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



    public function timeLineAction()
    {

        $em=$this->getDoctrine()->getManager();
        $pubs=$em->getRepository('EspritFamycityBundle:TimeLinePostes')->creatFindALl()->getResult();


        $user = new User();
        $user->setNom("nefzi");
        $user->setId(1);
        $user->setPrenom("Med");
        $user->setImage('../Famicity/Images/med.jpg');


        foreach ($pubs as $a){

            $a->setCreateur($user);
        }


        return $this-> render('EspritFamycityBundle:TimeLine:timeLine.html.twig',array('m'=>$pubs));


    }

    public function likePostAction(int $idPost)
    {
        $em = $this->getDoctrine()->getManager();
        $models = $em->getRepository('EspritFamycityBundle:TimeLinePostes')->find($idPost);

        $user = $em->getRepository('EspritFamycityBundle:User')->find(1) ;

        $models=$models->addParticipants($user) ;


        $em->persist($models);
        $em->flush();


        $pubs=$em->getRepository('EspritFamycityBundle:TimeLinePostes')->creatFindALl()->getResult();
        return $this-> render('EspritFamycityBundle:TimeLine:timeLine.html.twig',array('m'=>$pubs));
    }

    public function commentPubTimeLineAction(Request $request,int $idPost){

        if ($request->getMethod() == Request::METHOD_POST) {
            $em = $this->getDoctrine()->getManager();
            $models = $em->getRepository('EspritFamycityBundle:TimeLinePostes')->find($idPost);
            $user = $em->getRepository('EspritFamycityBundle:User')->find(1) ;

            $comPub = $request->request->get('comPub');
            $com = new Commentaires() ;

            $com->setComment($comPub) ;
            $com->setOwner($user) ;
            $com->setTimeLinePost($models) ;

            $em = $this->getDoctrine()->getManager();





            $em->persist($com);
            $em->flush();

            return $this-> render('@EspritFamycity/TimeLine/singlePost.html.twig',array('m'=>$models));

        }
        return $this-> render('@EspritFamycity/TimeLine/timeLine.html.twig');

    }

    public function getPubAction(int $idPost){
        $em = $this->getDoctrine()->getManager();
        $models = $em->getRepository('EspritFamycityBundle:TimeLinePostes')->find($idPost);
        return $this-> render('@EspritFamycity/TimeLine/singlePost.html.twig',array('m'=>$models));
    }

    public function deletePubAction(int $idPost){
        $em = $this->getDoctrine()->getManager();
        $models = $em->getRepository('EspritFamycityBundle:TimeLinePostes')->find($idPost);
        $em->remove($models) ;
        $em->flush() ;
        $models = $em->getRepository('EspritFamycityBundle:TimeLinePostes')->find($idPost);
        return $this-> render('EspritFamycityBundle:TimeLine:timeLine.html.twig',array('m'=>$models));

    }

    public function loadPubToEditAction(int$idPost){
        $em = $this->getDoctrine()->getManager();
        $models = $em->getRepository('EspritFamycityBundle:TimeLinePostes')->find($idPost);
        return $this-> render('EspritFamycityBundle:TimeLine:EditsinglePost.html.twig',array('m'=>$models));
    }

    public function editSinglePostAction(Request $request,int $idPost){
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == Request::METHOD_POST) {

            $models = $em->getRepository('EspritFamycityBundle:TimeLinePostes')->find($idPost);

            $editLebelle = $request->request->get('libelle');



            $models->setLibelle($editLebelle);

            $models->setPubDate(new \DateTime()) ;
            $em->persist($models) ;
            $em->flush() ;

            $models = $em->getRepository('EspritFamycityBundle:TimeLinePostes')->find($idPost);
            return $this-> render('EspritFamycityBundle:TimeLine:singlePost.html.twig',array('m'=>$models));
        }

        $pubs=$em->getRepository('EspritFamycityBundle:TimeLinePostes')->creatFindALl()->getResult();
        return $this-> render('EspritFamycityBundle:TimeLine:timeLine.html.twig',array('m'=>$pubs));
    }

}

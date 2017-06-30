<?php

namespace Esprit\FamycityBundle\Controller;

use Esprit\FamycityBundle\Entity\User;
use Esprit\FamycityBundle\Form\User2Type;
use Esprit\FamycityBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FamilleController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function AfficheAction()
    {
        $em = $this->getDoctrine()->getManager();
        $f = $em->getRepository('EspritFamycityBundle:User')->findAll();
        return $this->render('@EspritFamycity/GestionUtilisateurAdmin/Affichemembre.html.twig', array('forum' => $f));
    }
    public function ModifierAction(Request $req,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $models=$em->getRepository('EspritFamycityBundle:User')->find($id);
        $form= $this->createForm(User2Type::class,$models);
        $form->handleRequest($req); //verifier c'est le formulaire est valide ou pas

        if($form->isValid()){
            $em->persist($models);
            $em->flush();
            return $this-> redirectToRoute("AfficheM");
        }

        return $this->render('EspritFamycityBundle:GestionUtilisateurAdmin:ModifierMembre.html.twig',array('f2'=>$form->createView()));

    }
    public function SuprimerAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $modeles=$em->getRepository('EspritFamycityBundle:User')->find($id);
        $em->remove($modeles);
        $em->flush(); // excuter la cmd

        return $this->redirectToRoute("AfficheM");
    }
    public function AjouterAction(Request $req)
    {
        $s = new User();
        $Form = $this->createForm(UserType::class, $s);
        $Form->handleRequest($req);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($s);
            $em->flush();
            return $this->redirectToRoute('AfficheM');
        }
        return $this->render('EspritFamycityBundle:GestionUtilisateurAdmin:AjouterMembre.html.twig  ', array('form' => $Form->createView()));
    }






    public function AfficheFrontAction()
    { $u=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        $f = $em->getRepository('EspritFamycityBundle:User')->findBy(array ('idFamille'=>$u));
        return $this->render('EspritFamycityBundle:GestionUtilisateurFront:AfficheMenbreFront.html.twig', array('forum' => $f));
    }
    public function ModifierFrontAction(Request $req,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $models=$em->getRepository('EspritFamycityBundle:User')->find($id);
        $form= $this->createForm(User2Type::class,$models);
        $form->handleRequest($req); //verifier c'est le formulaire est valide ou pas

        if($form->isValid()){
            $em->persist($models);
            $em->flush();
            return $this-> redirectToRoute("AfficheFront");
        }

        return $this->render('@EspritFamycity/GestionUtilisateurFront/ModifierMenbreFront.html.twig',array('f2'=>$form->createView()));

    }
    public function SuprimerFrontAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository('EspritFamycityBundle:User')->find($id);
        $em->remove($modele);
        $em->flush(); // excuter la cmd

        return $this->redirectToRoute("AfficheFront");
    }
    public function AjouterFrontAction(Request $req)
    {
        $s = new User();

        $u = $this->getUser();

        $Form = $this->createForm(UserType::class, $s);
        $Form->handleRequest($req);
        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $s->setIdFamille($u);
            $em->persist($s);
            $em->flush();
            return $this->redirectToRoute('AfficheFront');
        }
        return $this->render('@EspritFamycity/GestionUtilisateurFront/AjouterMenbreFront.html.twig', array('form' => $Form->createView()));
    }

}
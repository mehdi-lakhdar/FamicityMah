<?php

namespace Esprit\FamycityBundle\Controller;

use Esprit\FamycityBundle\Entity\Reclamation;
use Esprit\FamycityBundle\Form\ReclamationType;
use Esprit\FamycityBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ReclamationController extends Controller
{


    /**
     * ReclamationController constructor.
     */

    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    function ajoutPAction(Request $req)
    {

        $model = new Reclamation();
        $u = new User();
        $user = $this->getUser();

        $form = $this->createForm(ReclamationType::class, $model);

        if ($form->handleRequest($req)->isValid()) {
            $model->setId($user);
            $em = $this->getDoctrine()->getManager(); // contient la fonction persist
            // pour l'insertion dns le tableau
            $em->persist($model);
            $em->flush(); // excuter la cmd


        }

        return $this->render('EspritFamycityBundle:Reclamation:CreationReclamation.html.twig', array('f2' => $form->createView()));
    }

        function AffichageAction(){
            $modeles=new User();
            $user = $this->getUser();
            $em=$this->getDoctrine()->getManager();
            $modeles=$em->getRepository('EspritFamycityBundle:Reclamation')->findAll();
            return $this-> render('EspritFamycityBundle:Reclamation:MesReclamation.html.twig',array('m'=>$modeles));
        }

        function SuppressionAction($id){
            $em=$this->getDoctrine()->getManager();
            $modeles=$em->getRepository('EspritFamycityBundle:Reclamation')->find($id);
            $em->remove($modeles);
            $em->flush(); // excuter la cmd

            return $this->redirectToRoute("Reclamation2");
        }

        function  UpdateAction(Request $req,$id)
        {
            $em = $this->getDoctrine()->getManager();
            $models = $em->getRepository('EspritFamycityBundle:Reclamation')->find($id);
            $form = $this->createForm(ReclamationType::class, $models);
            $form->handleRequest($req); //verifier c'est le formulaire est valide ou pas

            if ($form->isValid()) {
                $em->persist($models);
                $em->flush();
                return $this->redirectToRoute("Reclamation2");

            }

            return $this->render('@EspritFamycity/Reclamation/MesReclamation.html.twig', array('f2' => $form->createView()));

        }

            function affichageHomeAction(){



                $user = $this->getUser();
                $em=$this->getDoctrine()->getManager();
                $modeles=$em->getRepository('EspritFamycityBundle:Reclamation')->findAll();
                // $countPub = $modeles->countPub();

                return $this-> render('@EspritFamycity/Default/home.html.twig',
                    array(
                        'm'=>$modeles,
                        'u'=>$user,
                        // 'countPub'=> $countPub
                    ));
            }
        }

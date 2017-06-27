<?php

namespace Esprit\FamycityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homeAction()
    {
        return $this->render('@EspritFamycity/Default/home.html.twig');
    }
    public function layoutAAction()
    {
        return $this->render('@EspritFamycity/layout.html.twig');
    }
    public function loginAAction()
    {
        return $this->render('@EspritFamycity/Security/login.html.twig');
    }
    public function getParent(){
        return 'FOSUserBundle';
    }
}

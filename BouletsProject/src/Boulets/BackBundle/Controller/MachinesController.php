<?php

namespace Boulets\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MachinesController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }
    public function getLoginAction()
    {
        return $this->render('FrontBundle:Administrateur:logIn.html.twig');
    }
}

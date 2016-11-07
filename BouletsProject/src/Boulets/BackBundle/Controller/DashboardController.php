<?php

namespace Boulets\BackBundle\Controller;

use Boulets\BackBundle\Entity\Machine;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;



class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Dashboard:index.html.twig');
    }

    public function boardAction()
    {
        $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");
        $machine = $repo->findAll();
        $reponse = $this->get('templating')
            ->render('BackBundle:Dashboard:board.html.twig', array('machine' => $machine));
        return new Response($reponse);
    }

}

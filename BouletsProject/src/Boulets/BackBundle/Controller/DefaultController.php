<?php

namespace Boulets\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Boulets\BackBundle\Entity\Mahchine;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }

    public function boardAction()
    {
        $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");
        $machine= $repo->findAll();
        $reponse = $this->get('templating')
            ->render('BackBundle:Default:board.html.twig', array('machine'=>$machine));
        return new Response($reponse);
    }



}

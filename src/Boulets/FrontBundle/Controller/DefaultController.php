<?php


    namespace Boulets\FrontBundle\Controller;


    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class DefaultController extends Controller
    {


        public function creditAction()
        {

                $response = $this->get('templating')
                    ->render('FrontBundle:Default:credit.html.twig');
                return new Response($response);
        }





    }
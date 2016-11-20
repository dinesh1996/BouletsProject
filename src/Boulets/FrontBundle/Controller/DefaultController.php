<?php


    namespace Boulets\FrontBundle\Controller;


    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class DefaultController extends Controller
    {


        public function creditAction(Request $request)
        {


            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');


            $response = $this->get('templating')
                ->render('FrontBundle:Default:credit.html.twig', array('nom' => $nom));

            return new Response($response);


        }


    }
<?php

    namespace Boulets\FrontBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;


    class SalleController extends Controller
    {


        public function allsallesAction(Request $request)
        {

            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');
            $repo = $this->getDoctrine()->getRepository("BackBundle:Salle");
            $salles = $repo->findBy(array(), array('id' => 'DESC'));


            $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");
            $machineIn = $repo->findBy(array(), array('id' => 'DESC'));


            $reponse = $this->get('templating')
                ->render('FrontBundle:Salle:allsalle.html.twig', array('salles' => $salles, 'machines' => $machineIn,'nom'=>$nom));
            return new Response($reponse);


        }


        public function salleAction(Request $request, $id)
        {

            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');
            if ($request->isMethod('GET')) {


                $repo = $this->getDoctrine()->getRepository("BackBundle:Salle");
                $salle = $repo->findOneBy(array('id' => $id));

                $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");
                $machineIn = $repo->findAll();


                $reponse = $this->get('templating')
                    ->render('FrontBundle:Salle:salleview.html.twig',
                        array('salle' => $salle, 'machines' => $machineIn,'nom'=>$nom));
                return new Response($reponse);

            }
        }


        public function machinepreAction(Request $request, $id)
        {


            if ($request->isMethod('POST')) {

                $session = $request->getSession();
                $session->getName();
                $nom = $session->get('name');
                $repo = $this->getDoctrine()->getRepository("BackBundle:Salle");
                $salle = $repo->findBy(array('id' => $id));

                $salleNom = $salle[0]->getNom();

                $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");
                $machineIn = $repo->findBy(array('salle' => $salleNom));


                $reponse = $this->get('templating')
                    ->render('FrontBundle:Salle:machineinsalle.html.twig', array('machines' => $machineIn,'nom'=>$nom));
                return new Response($reponse);

            }
            $this->addFlash(
                'Notification',
                "La salle n'a pas pu être retirée."
            );


            return $this->redirectToRoute('front_allsalleaffiche');
        }


    }
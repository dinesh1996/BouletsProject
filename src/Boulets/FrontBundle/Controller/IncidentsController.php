<?php


    namespace Boulets\FrontBundle\Controller;


    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class IncidentsController extends Controller
    {


        public function allincidentsAction()
        {


            $repo = $this->getDoctrine()->getRepository("BackBundle:Incident");
            $incidents = $repo->findBy(array(), array('id' => 'DESC'));

            $reponse = $this->get('templating')
                ->render('FrontBundle:Incidents:allincidents.html.twig', array('incidents' => $incidents));
            return new Response($reponse);


        }


        public function incidentAction(Request $request, $id)
        {


            if ($request->isMethod('GET')) {


                $repo = $this->getDoctrine()->getRepository("BackBundle:Incident");
                $incident = $repo->findOneBy(array('id' => $id));


                $response = $this->get('templating')
                    ->render('FrontBundle:Incidents:incidentview.html.twig', array('incident' => $incident));

                return new Response($response);
            }

        }


    }
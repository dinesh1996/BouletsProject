<?php


namespace Boulets\BackBundle\Controller;


    use Boulets\BackBundle\Entity\Incident;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

class IncidentsController extends Controller
{

    public function createIncidentAction(Request $request)
    {


        if ($request->isMethod("POST")) {


            $nom = $request->request->get("nom");
            $machine = $request->request->get("machine");
            $type = $request->request->get("type");
            $text = $request->request->get("text");


            $repo = $this->getDoctrine()->getRepository("BackBundle:Incident");
            $incidentP = $repo->findOneBy(array('nom' => $nom, 'machine' => $machine, 'type' => $type));


            if ($incidentP == null) {

                $i = new Incident();
                $i->setNom($nom);
                $i->setMachine($machine);
                $i->setType($type);
                $i->setText($text);
                $i->setDatedebut(date_create());

                $datacontext = $this->getDoctrine()->getEntityManager();
                $datacontext->persist($i);
                $datacontext->flush();



                return $this->redirectToRoute('back_indexallincidents');

            } else {





                return $this->redirectToRoute('back_createincident');

            }

        } elseif ($request->isMethod('GET')) {


            $response = $this->get('templating')
                ->render('BackBundle:Incidents:createincident.html.twig');
            return new Response($response);


        }


    }


    /* public function formAction(Request $request)
     {
         if ($request->isMethod('GET')) {

             $response = $this->get('templating')
                 ->render('B2Bundle:Test:form.html.twig');

             return new Response($response);

         } else if ($request->isMethod('POST')) {

             $nom = $request->request->get('nom');//- POST
             $prenom = $request->request->get('prenom');//- POST

             if ($nom == null || $prenom == null) {

                 $response = $this->get('templating')
                     ->render('B2Bundle:Test:form.html.twig', array('alerte' => "Une des champs n 'est pas rempli, meric de résseyer"));

                 return new Response($response);

             } else {

                 //- MISE EN PLACE DE VARIABLES DE SESSIONS FLASH A USAGE UNIQUE, SE SUPPRIME APRES UTILISATION
                 //- PEUT EN CREER PLUSIEURS DU MEME NOM
                 $session = $request->getSession();
                 $session->getFlashBag()->add('message', 'Saisie OK');
                 $session->getFlashBag()->add('message', 'Je confirme, Saisie OK');

                 //- REDIRECT VERS LA VIEW - VIEW
                 return $this->redirectToRoute('B2_test_view_retour', array('nom' => $nom, 'prenom' => $prenom));

             }

         } else {

             $response = new Response();
             $response->setContent("Erreur d'accès");
             $response->setStatusCode(Response::HTTP_NOT_FOUND);
             return $response;

         }

     }
    */
















    public function allincidentsAction()
    {


        $repo = $this->getDoctrine()->getRepository("BackBundle:Incident");
        $incidents = $repo->findAll();

        $reponse = $this->get('templating')
            ->render('BackBundle:Incidents:allincidents.html.twig', array('incidents' => $incidents));
        return new Response($reponse);


    }


    public function incidentAction(Request $request, $id)
    {

        if ($request->isMethod('GET')) {
            $request->attributes->get('id');//- ROUTE


        }
        $repo = $this->getDoctrine()->getRepository("BackBundle:Incident");
        $incident = $repo->findOneBy(array('id' => $id));


        $response = $this->get('templating')
            ->render('BackBundle:Incidents:incidentview.html.twig', array('incident' => $incident));

        return new Response($response);


    }





    public function incidentendAction(Request $request, $id)
    {


        if ($request->isMethod('GET')) {


            $response = $this->get('templating')
                ->render('BackBundle:Incidents:incidentend.html.twig');
            return new Response($response);
        }


        elseif ($request->isMethod("POST")) {


            $dateend = date_create($request->request->get("dateend"));


            $repo = $this->getDoctrine()->getRepository("BackBundle:Incident");
            $incidentP = $repo->findOneBy(array('id' => $id));







            if ($incidentP != null) {

                $em = $this->getDoctrine()->getManager();
                $incidentE = $em->getRepository('BackBundle:Incident')->find($id);

                if (!$incidentE) {
                    throw $this->createNotFoundException(
                        'Pas incident trouvé pour cette id '.$id
                    );
                }

                $incidentE->setDatefin($dateend);
                $em->flush();



                return $this->redirectToRoute('back_indexallincidents', array('incident' => $incidentP));


            } else {


                return $this->render('BackBundle:Incidents:allincidents.html.twig');


            }








        }



    }








}
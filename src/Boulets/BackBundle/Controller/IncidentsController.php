<?php


    namespace Boulets\BackBundle\Controller;


    use Boulets\BackBundle\Entity\Incident;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class IncidentsController extends Controller
    {


        public function createAction(Request $request)
        {
            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');
            if (!empty($nom)) {


                if ($request->isMethod("POST")) {

                    $nom = $request->request->get("nom");
                    $ip = $request->request->get("ip");
                    $type = $request->request->get("type");
                    $text = $request->request->get("text");
                    $testdatefin = null;


                    $repo = $this->getDoctrine()->getRepository("BackBundle:Incident");
                    $incidentP = $repo->findBy(array('nom' => $nom, 'ip' => $ip, 'datefin' => $testdatefin));
                    if ($incidentP == null) {



                        $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");
                        $machine1 = $repo->findBy(array('ip' => $ip));


                        if (isset($machine1)) {

                            $machine = $machine1[0]->getNom();
                            $salle = $machine1[0]->getSalle();
                            $i = new Incident();
                            $i->setIp($ip);
                            $i->setNom($nom);
                            $i->setMachine($machine);
                            $i->setType($type);
                            $i->setText($text);
                            $i->setSalle($salle);
                            $i->setDatedebut(date_create());

                            $datacontext = $this->getDoctrine()->getEntityManager();
                            $datacontext->persist($i);
                            $datacontext->flush();

                            $this->addFlash(
                                'Notification',
                                "L'ajout a bien été effectué."
                            );
                            return $this->redirectToRoute('front_indexallincidents');

                        } else {


                            $this->addFlash(
                                'Notification',
                                "Erreur:Echec de l'ajout de l'incident."
                            );


                            return $this->redirectToRoute('front_indexallincidents');

                        }


                    } else {
                        $this->addFlash(
                            'Notification',
                            "Erreur: L'ajout est déjà présent."
                        );


                        return $this->redirectToRoute('front_indexallincidents');
                    }

                } elseif ($request->isMethod('GET')) {


                    $repoSalle = $this->getDoctrine()->getRepository("BackBundle:Salle");
                    $repoMachine = $this->getDoctrine()->getRepository("BackBundle:Machine");
                    $salles = $repoSalle->findAll();
                    $machines = $repoMachine->findAll();


                    $reponse = $this->get('templating')
                        ->render('FrontBundle:Incidents:createincident.html.twig',
                            array('salles' => $salles, 'machines' => $machines));
                    return new Response($reponse);


                }

            } else {

                $this->addFlash(
                    'Notification',
                    'Vous devez vous connecter pour accéder à la page demandée'
                );


                return $this->redirectToRoute("login");

            }
        }


        public function incidentendAction(Request $request, $id)
        {
            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');
            if (!empty($nom)) {

                if ($request->isMethod('GET')) {


                    $response = $this->get('templating')
                        ->render('FrontBundle:Incidents:incidentend.html.twig');
                    return new Response($response);
                } elseif ($request->isMethod("POST")) {


                    $dateend = date_create($request->request->get("dateend"));


                    $repo = $this->getDoctrine()->getRepository("BackBundle:Incident");
                    $incidentP = $repo->findOneBy(array('id' => $id));


                    if ($incidentP != null) {

                        $em = $this->getDoctrine()->getManager();
                        $incidentE = $em->getRepository('BackBundle:Incident')->find($id);

                        if (!$incidentE) {
                            throw $this->createNotFoundException(
                                'Pas incident trouvé pour cette id ' . $id
                            );
                        }

                        $incidentE->setDatefin($dateend);
                        $em->flush();


                        return $this->redirectToRoute('front_indexallincidents', array('incident' => $incidentP));


                    } else {


                        return $this->render('FrontBundle:Incidents:allincidents.html.twig');


                    }


                }


            } else {
                $this->addFlash(
                    'Notification',
                    'Vous devez vous connecter pour accéder à la page demandée'
                );


                return $this->redirectToRoute("login");

            }


        }


    }
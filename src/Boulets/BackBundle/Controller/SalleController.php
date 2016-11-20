<?php
    namespace Boulets\BackBundle\Controller;

    use Boulets\BackBundle\Entity\Salle;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;


    class SalleController extends Controller
    {


        public function createAction(Request $request)
        {
            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');
            if (!empty($nom)) {

                if ($request->isMethod("POST")) {
                    $nom = $request->request->get('nom');
                    $etat = $request->request->get('etat');
                    $incident = $request->request->get('incident');
                    $admin = $session->get("name");
                    $repo = $this->getDoctrine()->getRepository("BackBundle:Salle");
                    $salle = $repo->findOneBy(array('nom' => $nom));

                    if ($salle == null) {
                        $s = new Salle();
                        $s->setNom($nom);
                        $s->setAdministrateur($admin);
                        $s->setIncident($incident);
                        $s->setDatecreation(date_create());
                        $s->setEtat($etat);
                        $s->setNbMachines(0);


                        $datacontext = $this->getDoctrine()->getEntityManager();
                        $datacontext->persist($s);
                        $datacontext->flush();
                        $this->addFlash(
                            'Notification',
                            "La salle a bien été ajoutée"
                        );
                        return $this->redirectToRoute('front_allsalleaffiche');
                    } else {
                        $this->addFlash(
                            'Notification',
                            "Erreur:La salle n'a pas pu être ajoutée, réessayer"
                        );
                        return $this->redirectToRoute('back_createsalle');
                    }
                } elseif ($request->isMethod('GET')) {
                    $repoSalle = $this->getDoctrine()->getRepository("BackBundle:Salle");
                    $salles = $repoSalle->findAll();
                    $reponse = $this->get('templating')
                        ->render('FrontBundle:Salle:createsalle.html.twig',
                            array('salles' => $salles));
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

        public function updateAction(Request $request, $id)
        {
            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');
            if (!empty($nom)) {

                if ($request->isMethod('GET')) {

                    $repoSalle = $this->getDoctrine()->getRepository("BackBundle:Salle");
                    $salle = $repoSalle->findOneBy(array('id' => $id));


                    $reponse = $this->get('templating')
                        ->render('FrontBundle:Salle:updatesalle.html.twig', array('salle' => $salle));
                    return new Response($reponse);


                } elseif ($request->isMethod("POST")) {


                    $nom = $request->request->get('nom');
                    $etat = $request->request->get('etat');
                    $incident = $request->request->get('incident');
                    $admin = $session->get("name");


                    $repo = $this->getDoctrine()->getRepository("BackBundle:Salle");
                    $Sallet = $repo->findBy(array('nom' => $nom));


                    if ($Sallet == null) {


                        $em = $this->getDoctrine()->getManager();
                        $salleE = $em->getRepository('BackBundle:Salle')->find($id);


                        if ($salleE != null) {
                            if (!empty($etat)) {
                                $salleE->setEtat($etat);
                                $em->flush();
                            }

                            if (!empty($incident)) {
                                $salleE->setIncident($incident);
                                $em->flush();


                            }
                            if (!empty($nom)) {
                                $salleE->setNom($nom);
                                $em->flush();
                            }
                            if (!empty($admin)) {
                                $salleE->setAdministrateur($admin);
                                $em->flush();
                            }

                            $this->addFlash(
                                'Notification',
                                "La salle a bien été mis à jour."
                            );
                            return $this->redirectToRoute('front_allsalleaffiche');
                        }
                    }


                    $this->addFlash(
                        'Notification',
                        "Erreur:Le nom donné a déjà été attribué.Veuillez recommencer."
                    );


                    return $this->redirectToRoute('front_allsalleaffiche');


                }


            } else {
                $this->addFlash(
                    'Notification',
                    'Vous devez vous connecter pour accéder à la page demandée'
                );


                return $this->redirectToRoute("login");


            }
        }

        public function deleteAction(Request $request, $id)
        {

            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');
            if (!empty($nom)) {


                if ($request->isMethod('POST')) {


                    $repo = $this->getDoctrine()->getRepository("BackBundle:Salle");

                    $salle = $repo->findOneBy(array('id' => $id));
                    $datacontext = $this->getDoctrine()->getEntityManager();

                    if (!empty($salle)) {
                        $datacontext->remove($salle);
                        $datacontext->flush();


                        $this->addFlash(
                            'Notification',
                            "La salle a été retirée."
                        );


                        return $this->redirectToRoute('front_allsalleaffiche');
                    }


                    $this->addFlash(
                        'Notification',
                        "Erreur:Echec du retrait de la machine"
                    );


                    return $this->redirectToRoute('front_allsalleaffiche');
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
<?php


    namespace Boulets\BackBundle\Controller;

    use Boulets\BackBundle\Entity\Machine;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class MachineController extends Controller
    {


        public function createAction(Request $request)
        {
            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');
            if (!empty($nom)) {


                if ($request->isMethod("POST")) {


                    $ip = $request->request->get('ip');
                    $nom = $request->request->get('nom');
                    $type = $request->request->get('type');
                    $ram = $request->request->get('ram');
                    $disque = $request->request->get('disque');
                    $statut = $request->request->get('statut');
                    $salle = $request->request->get('salle');


                    $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");
                    $machine = $repo->findOneBy(array('ip' => $ip));


                    $isValid = filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);


                    if ($machine == null && $isValid) {

                        $m = new Machine();
                        $m->setIp($ip);
                        $m->setNom($nom);
                        $m->setType($type);
                        $m->setRam($ram);
                        $m->setDisque($disque);
                        $m->setStatut($statut);
                        $m->setDate(date_create());
                        $m->setSalle($salle);


                        $datacontext = $this->getDoctrine()->getEntityManager();
                        $datacontext->persist($m);
                        $datacontext->flush();

                        $this->addFlash(
                            'Notification',
                            "La machine   a bien été ajoutée"
                        );

                        return $this->redirectToRoute('front_machineall');


                    } else {

                        $this->addFlash(
                            'Notification',
                            "La machine n'a pas pu être ajoutée, réessayer"
                        );
                        return $this->redirectToRoute('back_machine_create');

                    }

                } elseif ($request->isMethod('GET')) {


                    $repoSalle = $this->getDoctrine()->getRepository("BackBundle:Salle");
                    $salles = $repoSalle->findAll();


                    $reponse = $this->get('templating')
                        ->render('FrontBundle:Machine:createmachine.html.twig',
                            array('salles' => $salles));
                    return new Response($reponse);


                }

            } else {
                $this->addFlash(
                    'Notification',
                    'Vous devez vous connecté pour accedé à la page demandée'
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
                    $salles = $repoSalle->findAll();


                    $machinesR = $this->getDoctrine()->getRepository("BackBundle:Machine");
                    $machine = $machinesR->findOneBy(array('id' => $id));
                    $response = $this->get('templating')
                        ->render('FrontBundle:Machine:updatemachine.html.twig',
                            array('machine' => $machine, 'salles' => $salles));
                    return new Response($response);

                } elseif ($request->isMethod("POST")) {


                    $ip = $request->request->get('ip');
                    $nom = $request->request->get('nom');
                    $type = $request->request->get('type');
                    $ram = $request->request->get('ram');
                    $disque = $request->request->get('disque');
                    $statut = $request->request->get('statut');
                    $salle = $request->request->get('salle');


                    $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");
                    $machineSame2 = $repo->findBy(array('ip' => $ip));


                    if ($machineSame2 == null) {


                        $em = $this->getDoctrine()->getManager();
                        $machineE = $em->getRepository('BackBundle:Machine')->find($id);



                        if ($machineE != null) {


                            if (!empty($ip)) {
                                $machineE->setIp($ip);
                                $em->flush();

                            }
                            if (!empty($nom)) {
                                $machineE->setNom($nom);
                                $em->flush();
                            }
                            if (!empty($type)) {
                                $machineE->setType($type);
                                $em->flush();
                            }
                            if (!empty($ram)) {
                                $machineE->setRam($ram);
                                $em->flush();
                            }
                            if (!empty($disque)) {
                                $machineE->setDisque($disque);
                                $em->flush();
                            }
                            if (!empty($statut)) {
                                $machineE->setStatut($statut);
                                $em->flush();
                            }
                            if (!empty($salle)) {
                                $machineE->setSalle($salle);
                                $em->flush();
                            }


                            $this->addFlash(
                                'Notification',
                                "La machine  a bien été modifiée "
                            );


                            return $this->redirectToRoute('front_machineall');


                        }
                    }


                    $this->addFlash(
                        'Notification',
                        "Une machine qui comporte l'ip donnée est déja attribuéé "
                    );


                    return $this->redirectToRoute('front_machineall');


                }


            } else {
                $this->addFlash(
                    'Notification',
                    'Vous devez vous connecté pour accedé à la page demandée'
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


                    $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");

                    $machine = $repo->findOneBy(array('id' => $id));
                    $datacontext = $this->getDoctrine()->getEntityManager();

                    if (!empty($machine)) {
                        $datacontext->remove($machine);
                        $datacontext->flush();


                        $this->addFlash(
                            'Notification',
                            "La machine a été  retirée."
                        );


                        return $this->redirectToRoute('front_machineall');
                    }


                    $this->addFlash(
                        'Notification',
                        "La machine qui comporte l'ip n'a pas pu être retirée."
                    );


                    return $this->redirectToRoute('front_machineall');
                }


            } else {

                $this->addFlash(
                    'Notification',
                    'Vous devez vous connecter pour accéder à la page demandée'
                );


                return $this->redirectToRoute("login");

            }
        }

        public function PingAction(Request $request, $id)
        {

            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');
            if (!empty($nom)) {


                if ($request->isMethod('POST')) {


                    $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");

                    $machine = $repo->findOneBy(array('id' => $id));

                    if (isset ($machine)) {
                        $select_ip = $machine->getIp();


                        exec("ping -c 2 " . $select_ip, $output, $result);

                        $em = $this->getDoctrine()->getManager();
                        $machineE = $em->getRepository('BackBundle:Machine')->find($id);
                        if ($result == 0) {


                            $this->addFlash(
                                'Notification',
                                "Ping réussi!"

                            );

                            $machineE->setStatut("Allumée");
                            $em->flush();

                            $response = $this->get('templating')
                                ->render('FrontBundle:Machine:pingview.html.twig',
                                    array('ping' => $output, 'machine' => $machine));
                            return new Response($response);

                        } else {

                            $machineE->setStatut("Eteinte");
                            $em->flush();
                            $this->addFlash(
                                'Notification',
                                "Echec du ping"
                            );
                            return $this->redirectToRoute('front_machineall');

                        }
                    }
                } else {


                    return $this->redirectToRoute('front_machineall');
                }
            } else {

                $this->addFlash(
                    'Notification',
                    'Vous devez vous connecté pour accedé à la page demandée'
                );


                return $this->redirectToRoute("login");

            }
        }
    }
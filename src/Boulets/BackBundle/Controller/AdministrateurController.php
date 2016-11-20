<?php

    namespace Boulets\BackBundle\Controller;

    use Boulets\BackBundle\Entity\Administrateur;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;


    class AdministrateurController extends Controller
    {


        //Création d'un user
        public function createAction(Request $request)
        {
            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');
            if (!empty($nom)) {


                if ($request->isMethod('POST')) {
                    $mail = $request->request->get("mail");
                    $mdp = $request->request->get("mdp");
                    $nom = $request->request->get("nom");
                    $confmdp = $request->request->get("confmdp");

                    //Vérifie si les champs sont bien remplis avec quelques chose
                    if (!empty($nom) && !empty($mail) && !empty($mdp) && !empty($confmdp)) {
                        //Vérifie si les champs mdp et confmdp sont les mêmes
                        if ($mdp == $confmdp) {

                            //Hashage et cryptage du mot de passe
                            $mdp = $mdp . crypt($mdp, CRYPT_BLOWFISH);
                            $mdp = hash('md5', $mdp);

                            //Consulter la bdd
                            $repo = $this->getDoctrine()->getRepository('BackBundle:Administrateur');
                            $utilisateurmail = $repo->findBy(array('mail' => $mail));
                            $utilisateurnom = $repo->findBy(array('nom' => $nom));


                            if ($utilisateurmail || $utilisateurnom) {
                                //Placer l'erreur que les champs mdp et confmdp ne sont pas remplis


                                $this->addFlash(
                                    'Notification',
                                    "Erreur:L'utilisateur existe déjà."
                                );


                                return $this->redirectToRoute("admin_create");


                            } else {
                                //On crée un objet utilisateur et on lui affecte les valeurs de nos inputs
                                $newAdmin = new Administrateur();
                                $newAdmin->setNom($nom);
                                $newAdmin->setPassword($mdp);
                                $newAdmin->setMail($mail);

                                //Enregistrement en bdd
                                $datacontext = $this->getDoctrine()->getEntityManager();
                                $datacontext->persist($newAdmin);
                                $datacontext->flush();

                                //Retour vers la page de login avec comme message que l'inscription fut un succès

                                $this->addFlash(
                                    'Notification',
                                    "Succès de l'inscription, vous pouvez vous connecter dés à présent. "
                                );

                                return $this->redirectToRoute("login");
                            }
                            //Consulter la bdd
                            $repo = $this->getDoctrine()->getRepository('BackBundle:Administrateur');
                            $utilisateur = $repo->findOneBy(array('mail' => $mail, 'password' => $mdp, 'nom' => $nom));
                            if ($utilisateur) {
                                //Placer l'erreur que les champs mdp et confmdp ne sont pas remplis
                                $erreur = "Erreur:L'utilisateur existe déjà.";
                                $response = $this->get('templating')
                                    ->render('BackBundle:Administrateur:create.html.twig', array('error' => $erreur));
                                return new Response($response);

                            } else {


                                $this->addFlash(
                                    'Notification',
                                    "Erreur : Les champs mot de passe et Confirmation de mot de passe ne sont pas les mêmes."
                                );

                                return $this->redirectToRoute("admin_create");
                            }


                        } else {


                            $this->addFlash(
                                'Notification',
                                "Erreur:Les champs ne sont pas tous remplis."
                            );

                            return $this->redirectToRoute("admin_create");


                        }

                    } elseif ($request->isMethod('GET')) {
                        return $this->render('BackBundle:Administrateur:create.html.twig');

                        //Placer erreur que les champs ne sont pas tous remplis
                        $erreur = "Erreur:Les champs ne sont pas tous remplis.";
                        $response = $this->get('templating')
                            ->render('BackBundle:Administrateur:create.html.twig', array('error' => $erreur));
                        return new Response($response);


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

            //Update
            public
            function updateAction(Request $request)
            {

                $session = $request->getSession();
                $session->getName();
                $nom = $session->get('name');
                if (!empty($nom)) {


                    if ($request->isMethod('GET')) {

                        return $this->render('BackBundle:Administrateur:update.html.twig');

                    } elseif ($request->isMethod('POST')) {


                        $mdp = $request->request->get("mdp");
                        $nom = $request->request->get("nom");
                        $confmdp = $request->request->get("confmdp");

                        $repo = $this->getDoctrine()->getRepository('BackBundle:Administrateur');
                        $utilisateur = $repo->findOneBy(array(
                            'mail' => $this->get('session')->get('mail'),
                            'nom' => $this->get('session')->get('name')
                        ));
                        $datacontext = $this->getDoctrine()->getEntityManager();

                        if (!empty($nom)) {

                            $repository = $this->getDoctrine()->getRepository('BackBundle:Salle');
                            $machines = $repository->findBy(array('administrateur' => $this->get('session')->get('name')));

                            for ($index = 0; $index < count($machines); $index++) {
                                $machines[$index]->setAdministrateur($nom);
                            }
                            $utilisateur->setNom($nom);
                            $datacontext->flush();
                            $this->get('session')->set('name', $nom);
                        }

                        if (!empty($mdp) && !empty($confmdp) && $mdp == $confmdp) {

                            $mdp = $mdp . crypt($mdp, CRYPT_BLOWFISH);
                            $mdp = hash('md5', $mdp);

                            $utilisateur->setPassword($mdp);
                            $datacontext->flush();

                        }


                        $this->addFlash(
                            'Notification',
                            " administrateur mise à jour."
                        );

                        return $this->redirectToRoute("admin_profil");
                    }


                } else {
                    $this->addFlash(
                        'Notification',
                        'Vous devez vous connecter pour accéder à la page demandée'
                    );
                    return $this->redirectToRoute("login");

                }

            }

            //Login
            public function loginAction(Request $request)
            {
                if ($request->isMethod('POST')) {
                    //On récupère les données envoyées par le formulaire en post
                    $mail = $request->request->get("mail");
                    $mdp = $request->request->get("mdp");

                    //On vérifie si les champs ont été remplis
                    if (!empty($mdp) && !empty($mail)) {
                        //On crypte le mot de passe
                        $mdp = $mdp . crypt($mdp, CRYPT_BLOWFISH);
                        $mdp = hash('md5', $mdp);

                        //Consulte la bdd
                        $repo = $this->getDoctrine()->getRepository('BackBundle:Administrateur');
                        //On cherche dans la bdd l'existence de notre utilisateur
                        $utilisateur = $repo->findOneBy(array('mail' => $mail, 'password' => $mdp));

                        if ($utilisateur) {
                            //On crée une nouvelle session
                            $session = $request->getSession();
                            //On affecte à cette session différentes valeur
                            $session->set('name', $utilisateur->getNom());
                            $session->set('mail', $utilisateur->getMail());

                            $this->addFlash(
                                'Notification',
                                "Vous êtes connecté."
                            );

                            return $this->redirectToRoute("admin_profil");

                        } else {
                            $this->addFlash(
                                'Notification',
                                "Erreur:Mot de passe ou Email incorrect."
                            );

                            return $this->redirectToRoute("login");
                        }

                    } else {
                        //On renvoie vers la page de login dans le cas où au minimum un des inputs n'a pas été remplis


                        $this->addFlash(
                            'Notification',
                            "Les champs ne sont pas tous remplis"
                        );


                        return $this->redirectToRoute("login");


                    }
                } elseif ($request->isMethod('GET')) {
                    return $this->render('FrontBundle:Administrateur:logIn.html.twig');
                }
            }


            //LogOut
            public
            function logoutAction(Request $request)
            {

                $session = $request->getSession();
                $session->getName();
                $nom = $session->get('name');
                if (!empty($nom)) {
                    /* pour tout supprimer */
                    $this->get('session')->clear();

                    $this->addFlash(
                        'Notification',
                        "Vous n'êtes plus connecté "
                    );
                    return $this->redirectToRoute("front_allsalleaffiche");

                } else {
                    $this->addFlash(
                        'Notification',
                        'Vous n\'êtes pas connecté sur le site'
                    );


                    return $this->redirectToRoute("login");

                }
            }


            //Profil de l'utilisateur
            public
            function profilAction(Request $request)
            {
                $session = $request->getSession();
                $session->getName();
                $nom = $session->get('name');
                $mail = $session->get('mail');

                if (empty($nom)) {

                    $this->addFlash(
                        'Notification',
                        'Vous devez vous connecter pour accéder à la page demandée'
                    );
                    return $this->redirectToRoute("login");
                } elseif (!empty($nom)) {

                    $response = $this->get('templating')
                        ->render('BackBundle:Administrateur:profil.html.twig', array('nom' => $nom, 'mail' => $mail));
                    return new Response($response);
                }
            }

            //Renvoie la liste des utilisateurs du site
            public
            function allAdminAction(Request $request)
            {


                $session = $request->getSession();
                $session->getName();
                $nom = $session->get('name');
                if (!empty($nom)) {


                    $repo = $this->getDoctrine()->getRepository("BackBundle:Administrateur");
                    $utilisateurs = $repo->findBy(array(), array('id' => 'DESC'));
                    $response = $this->get('templating')
                        ->render('BackBundle:Administrateur:list.html.twig', array('utilisateurs' => $utilisateurs, 'nom' => $nom));
                    return new Response($response);

                } else {
                    $this->addFlash(
                        'Notification',
                        'Vous devez vous connecter pour accéder à la page demandée'
                    );
                    return $this->redirectToRoute("login");

                }
            }

            //Affiche les détails d'un utilisateur autre que celui connecté
            public
            function AdminDetailsAction(Request $request, $id)
            {

                $session = $request->getSession();
                $session->getName();
                $nom = $session->get('name');
                if (!empty($nom)) {


                    if ($request->isMethod('GET')) {


                        $repo = $this->getDoctrine()->getRepository("BackBundle:Administrateur");
                        $user = $repo->findOneBy(array('id' => $id));

                        if ($user) {

                            if ($user) {
                                $response = $this->get('templating')
                                    ->render('BackBundle:Administrateur:adminDetails.html.twig', array('user' => $user, 'nom' => $nom));
                            }
                            return new Response($response);
                        } else {

                            $this->addFlash(
                                'Notification',
                                'Erreur:Administrateur non trouvé'
                            );


                            return $this->redirectToRoute("AllAdmin");
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

            //Supprime un utilisateur depuis la liste
            public
            function AdminDeleteAction(Request $request, $id)
            {


                $session = $request->getSession();
                $session->getName();
                $nom = $session->get('name');
                if (!empty($nom)) {

                    if ($request->isMethod('GET')) {

                        $repo = $this->getDoctrine()->getRepository("BackBundle:Administrateur");

                        $user = $repo->findOneBy(array('id' => $id));
                        if ($user) {
                            $datacontext = $this->getDoctrine()->getEntityManager();
                            $datacontext->remove($user);
                            $datacontext->flush();


                            $this->addFlash(
                                'Notification',
                                'Administrateur a bien été supprimé '
                            );

                            return $this->redirectToRoute("AllAdmin");
                        } else {
                            return $this->redirectToRoute("AllAdmin");
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

<?php

    namespace Boulets\BackBundle\Controller;

    use Boulets\BackBundle\Entity\Administrateur;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;


    class AdministrateurController extends Controller
    {
        public function indexAction()
        {
            return $this->render('BackBundle:Default:index.html.twig');
        }

        //Création d'un user
        public function createAction(Request $request)
        {
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
                        $utilisateur = $repo->findOneBy(array('mail' => $mail, 'password' => $mdp, 'nom' => $nom));
                        if ($utilisateur) {
                            //Placer l'erreur que les champs mdp et confmdp ne sont pas remplis
                            $erreur = "Les champs Mot de passe et Confirmation de Mot de passe ne correspondent pas.";
                            $response = $this->get('templating')
                                ->render('BackBundle:Administrateur:create.html.twig', array('error' => $erreur));
                            return new Response($response);
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
                            $success = "Succès de l'inscription.";
                            $response = $this->get('templating')
                                ->render('BackBundle:Administrateur:logIn.html.twig', array('success' => $success));
                            return new Response($response);
                        }


                    } else {

                        $erreur = "Les champs mot de passe et Confirmation de mot de passe ne sont pas les mêmes.";
                        //Placer l'erreur que les champs mdp et confmdp ne sont pas remplis
                        $response = $this->get('templating')
                            ->render('BackBundle:Administrateur:create.html.twig', array('error' => $erreur));
                        return new Response($response);
                    }

                } else {

                    //Placer erreur que les champs ne sont pas tous remplis
                    $erreur = "Les champs ne sont pas tous remplis.";
                    $response = $this->get('templating')
                        ->render('BackBundle:Administrateur:create.html.twig', array('error' => $erreur));
                    return new Response($response);

                }

            } elseif ($request->isMethod('GET')) {
                return $this->render('BackBundle:Administrateur:create.html.twig');
            }

        }

        //Update
        public function updateAction(Request $request)
        {
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
                return $this->redirectToRoute("admin_profil");
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
                        //$attributeBag = new AttributeBag('hoho');
                        //$attributeBag->setName('user');
                        //$session->registerBag($attributeBag);
                        //On affection à cette session différentes valeur
                        $session->set('name', $utilisateur->getNom());
                        $session->set('mail', $utilisateur->getMail());


                        return $this->redirectToRoute("admin_profil");

                    } else {
                        //On renvoie vers la page de login dans le cas où on ne trouve pas l'utilisateur en bdd
                        $erreur = "Mot de passe ou Email incorrect";
                        $response = $this->get('templating')
                            ->render('BackBundle:Administrateur:logIn.html.twig', array('error' => $erreur));
                        return new Response($response);
                    }
                } else {
                    //On renvoie vers la page de login dans le cas où au minimum un des inputs n'a pas été remplis
                    $erreur = "Les champs ne sont pas tous remplis";
                    $response = $this->get('templating')
                        ->render('BackBundle:Administrateur:logIn.html.twig', array('error' => $erreur));
                    return new Response($response);
                }
            } elseif ($request->isMethod('GET')) {
                return $this->render('BackBundle:Administrateur:logIn.html.twig');
            }
        }

        //LogOut
        public function logoutAction(Request $request)
        {


                /* pour tout supprimer */
                $this->get('session')->clear();
                return $this->redirectToRoute("front_allsalleaffiche");



        }


        //Profil de l'utilisateur
        public function profilAction(Request $request)
        {

            $session = $request->getSession();
            $session->getName();
            $nom = $session->get('name');

            $mail = $session->get('mail');
            if (empty($nom)) {
                return $this->redirectToRoute("login");

            } elseif (!empty($nom)) {
                $response = $this->get('templating')
                    ->render('BackBundle:Administrateur:profil.html.twig', array('nom' => $nom, 'mail' => $mail));
                return new Response($response);
            }
        }

        //Renvoie la liste des utilisateurs du site
        public function allAdminAction()
        {
            $repo = $this->getDoctrine()->getRepository("BackBundle:Administrateur");
            $utilisateurs = $repo->findAll();
            $response = $this->get('templating')
                ->render('BackBundle:Administrateur:list.html.twig', array('utilisateurs' => $utilisateurs));
            return new Response($response);
        }

        public function AdminDetailsAction(Request $request){
            $id =  $request->request->get("id");
            $repo = $this->getDoctrine()->getRepository("BackBundle:Administrateur");

            if(empty($id)){
                return $this->redirectToRoute("AllAdmin");
            }elseif (!empty($id)){
                $user = $repo->findOneBy(array('id'=>$id));
                if($user){

                    $response = $this->get('templating')
                        ->render('BackBundle:Administrateur:adminDetails.html.twig',array('user' => $user));
                    return new Response($response);
                }else{
                    return $this->redirectToRoute("AllAdmin");
                }


            }
        }

        public function deleteAction(Request $request){

            $id =  $request->request->get("id");
            $repo = $this->getDoctrine()->getRepository("BackBundle:Administrateur");

            if(empty($id)){
                return $this->redirectToRoute("AllAdmin");
            } elseif (!empty($id)){
                $user = $repo->findOneBy(array('id'=>$id));
                if($user){
                    $datacontext= $this->getDoctrine()->getEntityManager();
                    $datacontext->remove($user);
                    $datacontext->flush();
                    return $this->redirectToRoute("AllAdmin");
                }else{
                    return $this->redirectToRoute("AllAdmin");
                }

            }
        }
    }

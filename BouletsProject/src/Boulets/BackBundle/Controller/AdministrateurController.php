<?php

namespace Boulets\BackBundle\Controller;

use Boulets\BackBundle\Entity\Administrateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class AdministrateurController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }

    public function createAction(Request $request)
    {
        if($request->isMethod('POST')){
            $mail = $request->request->get("mail");
            $mdp = $request->request->get("mdp");
            $nom = $request->request->get("nom");
            $confmdp = $request->request->get("confmdp");

            //Vérifie si les champs sont bien remplis avec quelques chose
            if (!empty($nom) && !empty($mail) && !empty($mdp) && !empty($confmdp)) {
                //Vérifie si les champs mdp et confmdp sont les mêmes
                if($mdp == $confmdp){

                    //Hashage et cryptage du mot de passe
                    $mdp = $mdp . crypt($mdp, CRYPT_BLOWFISH);
                    $mdp = hash('md5', $mdp);


                    //Consulter la bdd
                    //Première possibilité de consultation de bdd
                    $repo= $this->getDoctrine()->getRepository('BackBundle:Administrateur');
                    $utilisateur = $repo->findOneBy( array('mail' => $mail,'password' => $mdp,'nom' => $nom) );
                    if($utilisateur){
                        $erreur= "L'utilisateur existe déjà.";
                        //Placer l'erreur que les champs mdp et confmdp ne sont pas remplis
                        $response = $this->get('templating')
                            ->render('FrontBundle:Administrateur:create.html.twig',array('error'=> $erreur));
                        return new Response($response);
                    }else{
                        //On crée un objet utilisateur et on lui affecte les valeurs de nos inputs
                        $newAdmin = new Administrateur();
                        $newAdmin->setNom($nom);
                        $newAdmin->setPassword($mdp);
                        $newAdmin->setMail($mail);

                        //Enregistrement en bdd
                        $datacontext= $this->getDoctrine()->getEntityManager();
                        $datacontext->persist($newAdmin);
                        $datacontext->flush();

                        //Retour vers la page de login avec comme message que l'inscription fut un succès
                        $success = "Succès de l'inscription.";
                        $response = $this->get('templating')
                            ->render('FrontBundle:Administrateur:logIn.html.twig',array('success'=> $success));
                        return new Response($response);
                    }


                }else{

                    $erreur= "Les champs mot de passe et Confirmation de mot de passe ne sont pas les mêmes.";
                    //Placer l'erreur que les champs mdp et confmdp ne sont pas remplis
                    $response = $this->get('templating')
                        ->render('FrontBundle:Administrateur:create.html.twig',array('error'=> $erreur));
                    return new Response($response);
                }

            }else{

                //Placer erreur que les champs ne sont pas tous remplis
                $erreur = "Les champs ne sont pas tous remplis.";
                $response = $this->get('templating')
                    ->render('FrontBundle:Administrateur:create.html.twig',array('error'=> $erreur));
                return new Response($response);

            }

        } elseif ($request->isMethod('GET')){
            return $this->render('FrontBundle:Administrateur:create.html.twig');
        }

    }
    public function profilAction(Request $request)
    {
        if ($request->isMethod('GET')) {
            $session = new Session();
            $session-> migrate();
            $response = $this->get('templating')
                ->render('FrontBundle:Administrateur:profil.html.twig',array('nom'=> $session->get('nom'),'mail'=>$session->get('mail')));
                return new Response($response);
        }
    }
}

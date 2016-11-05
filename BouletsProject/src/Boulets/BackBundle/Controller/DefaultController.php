<?php

namespace Boulets\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }
    public function loginAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $mail = $request->request->get("mail");
            $mdp = $request->request->get("mdp");

            if(!empty($mdp) && !empty($mail)){
                $mdp = $mdp.crypt($mdp, CRYPT_BLOWFISH);
                $mdp = hash('md5', $mdp);
                //Consulter la bdd
                //Première possibilité de consultation de bdd
                $repo= $this->getDoctrine()->getRepository('BackBundle:Administrateur');
                $utilisateur = $repo->findOneBy( array('mail' => $mail,'password' => $mdp ) );

                if($utilisateur){
                    $session = new Session();
                    $session->start();

                    $session->set('name',$utilisateur->nom);
                    $session->set('name',$utilisateur->mail);

                    return $this->redirectToRoute("profil");

                }else{
                    $erreur = "Mot de passe ou Email incorrect";
                    $response = $this->get('templating')
                        ->render('FrontBundle:Administrateur:logIn.html.twig',array('error'=> $erreur));
                    return new Response($response);
                }
            }else{
                $erreur = "Les champs ne sont pas tous remplis";
                $response = $this->get('templating')
                    ->render('FrontBundle:Administrateur:logIn.html.twig',array('error'=> $erreur));
                return new Response($response);
            }
        }elseif ($request->isMethod('GET')){
            return $this->render('FrontBundle:Administrateur:logIn.html.twig');
        }
    }
}

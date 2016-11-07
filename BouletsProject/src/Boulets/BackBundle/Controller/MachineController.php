<?php


namespace Boulets\BackBundle\Controller;

use Boulets\BackBundle\Entity\Machine;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MachineController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }

    public  function createAction(Request $request)
    {
        if($request->isMethod("POST"))
        {
            $ip = $request->request->get('ip');
            $nom = $request->request->get('nom');
            $type = $request->request->get('type');
            $ram = $request->request->get('ram');
            $disque = $request->request->get('disque');
            $statut = $request->request->get('statut');
            $id_salle = $request->request->get('id_salle');

            $m = new Machine();
            $m->setIp($ip);
            $m->setNom($nom);
            $m->setType($type);
            $m->setRam($ram);
            $m->setDisque($disque);
            $m->setStatut($statut);
            $m->setDate(date_create());
            $m->setId_salle($id_salle);

            $datacontext = $this->getDoctrine()->getEntityManager();
            $datacontext->persist($m);
            $datacontext->flush();

            return $this->render('BackBundle:Machine:index.html.twig');

        }
        elseif ($request->isMethod('GET'))
        {
            return $this->render('BackBundle:Machine:createmachine.html.twig');
        }
    }

    public function  updateAction()
    {

    }
}
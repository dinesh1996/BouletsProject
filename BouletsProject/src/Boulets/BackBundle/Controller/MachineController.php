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

    public function  updateAction(Request $request)
    {
        if($request->isMethod('GET'))
        {
            return $this->render('BackBundle:Machine:updatemachine.html.twig');
        }
        elseif($request->isMethod('POST'))
        {
            $ip=$request->request->get('ip');
            $nom=$request->request->get('nom');
            $type=$request->request->get('type');
            $ram=$request->request->get('ram');
            $disque=$request->request->get('disque');
            $statut=$request->request->get('statut');
            $id_salle=$request->request->get('id_salle');

            $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");
            $machine = $repo->findOneBy(array('ip'=>$ip));
            $datacontext = $this->getDoctrine()->getEntityManager();

            if($machine == null){
                return $this->render('BackBundle:Machine:updatemachine.html.twig');
            }
            else
            {
                if(!empty($nom))
                {
                    $machine->setNom($nom);
                    $datacontext->flush();
                }
                if(!empty($type))
                {
                    $machine->setType($type);
                    $datacontext->flush();
                }
                if(!empty($ram))
                {
                    $machine->setRam($ram);
                    $datacontext->flush();
                }
                if(!empty($disque))
                {
                    $machine->setDisque($disque);
                    $datacontext->flush();
                }
                if(!empty($statut))
                {
                    $machine->setStatut($statut);
                    $datacontext->flush();
                }
                if(!empty($id_salle))
                {
                    $machine->setId_salle($id_salle);
                    $datacontext->flush();
                }

                return $this->render('BackBundle:Machine:index.html.twig');
            }

        }
    }

    public function deleteAction()
    {

    }
}
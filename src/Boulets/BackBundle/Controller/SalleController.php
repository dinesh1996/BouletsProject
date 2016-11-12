<?php

namespace Boulets\BackBundle\Controller;
use Boulets\BackBundle\Entity\Salle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SalleController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Salle:index.html.twig');
    }

    public function createSalleAction(Request $request)
    {
        if($request->isMethod('POST'))
        {
            $nom = $request->request->get('nom');
            $m = new Salle();
            $m->setNom($nom);
            $m->setDatecreation(date_create());
            $m->setIncident("");
            $m->setAdministrateurs("");
            $m->setNbMachines(0);
            $datacontext = $this->getDoctrine()->getEntityManager();
            $datacontext->persist($m);
            $datacontext->flush();
            return $this->render('BackBundle:Salle:CreateSalle.html.twig');
        }
        elseif ($request->isMethod('GET'))
        {
            return $this->render('BackBundle:Salle:CreateSalle.html.twig');
        }
    }

    public function updateSalleAction(Request $request)
    {
        if($request->isMethod('GET'))
        {
            return $this->render('BackBundle:Salle:UpdateSalle.html.twig');
        }
        elseif($request->isMethod('POST'))
        {
            $nom=$request->request->get('nom');
            $id=$request->request->get('id');
            $repo = $this->getDoctrine()->getRepository("BackBundle:Salle");
            $salle = $repo->findOneBy(array('id'=>$id));
            $datacontext = $this->getDoctrine()->getEntityManager();
            if($salle == null){
                return $this->render('BackBundle:Salle:UpdateSalle.html.twig');
            }
            else
            {
                if(!empty($nom))
                {
                    $salle->setNom($nom);
                    $datacontext->flush();
                }
                return $this->render('BackBundle:Salle:index.html.twig');
            }
        }
    }

    public function deleteSalleAction(Request $request)
    {
        if($request->isMethod('GET'))
        {
            return $this->render('BackBundle:Salle:deleteSalle.html.twig');
        }
        elseif($request->isMethod('POST'))
        {
            $id=$request->request->get('id');
            $repo = $this->getDoctrine()->getRepository("BackBundle:Salle");
            $salle = $repo->findOneBy(array('id'=>$id));
            $datacontext = $this->getDoctrine()->getEntityManager();
            if(!empty($ip))
            {
                $datacontext->remove($salle);
                $datacontext->flush();
            }
            return $this->render('BackBundle:Salle:index.html.twig');
        }
    }
}
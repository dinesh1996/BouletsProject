<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/11/16
 * Time: 11:53
 */

namespace Boulets\BackBundle\Controller;

use Boulets\BackBundle\Entity\Salle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class SalleController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackBundle:Salle:CreateSalle.html.twig');
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
}
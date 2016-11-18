<?php


    namespace Boulets\FrontBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;

    class MachineController extends Controller
    {


        public function allmachinesAction()
        {


            $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");
            $machines = $repo->findBy(array(), array('id' => 'DESC'));

            $reponse = $this->get('templating')
                ->render('FrontBundle:Machine:allmachines.html.twig', array('machines' => $machines));
            return new Response($reponse);


        }


        public function machineAction( $id)
        {





                $repo = $this->getDoctrine()->getRepository("BackBundle:Machine");
                $machine = $repo->findOneBy(array('id' => $id));


                $response = $this->get('templating')
                    ->render('FrontBundle:Machine:machineview.html.twig', array('machine' => $machine));
                return new Response($response);





        }


    }
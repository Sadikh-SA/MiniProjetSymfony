<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\Entity\Service;
use App\Entity\Employer;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ServiceController extends AbstractController
{
    /**
     * @Route("/service", name="listerservice")
     */
    public function index()
    {

        $repo = $this->getDoctrine()->getRepository(Service::class);

        $services = $repo->findAll();

        return $this->render('service/index.html.twig', [
            'controller_namex' => 'ServiceControllers',
            'services' => $services
        ]);
    }
    /**
     * @Route("/service/lister", name="listeremployer")
     */
    public function ListerEmployer()
    {

        $repo = $this->getDoctrine()->getRepository(Employer::class);

        $employer = $repo->findAll();

        return $this->render('service/listeremployer.html.twig', [
            'controller_name' => 'ServiceController',
            'employer' => $employer
        ]);
    }
    /**
     * @Route("/service/newemployer", name="addemployer")
     * @Route("/service/{id}/editemployer", name="editemployer")
     */
    public function CreerEditEmployer(Request $request, ObjectManager $manager, Employer $employer=null)
    {
        if (!$employer) {
            $employer = new Employer();
        }

        $form = $this->createFormBuilder($employer)
                     ->add('Matricule')
                     ->add('NomComplet')
                     ->add('Ddn', DateType::class, [
                         'widget' => 'single_text',
                         'format' => 'yyyy-MM-dd'
                     ])
                     ->add('Adresse')
                     ->add('Cni')
                     ->add('Salaire')
                     ->add('idService', EntityType::class, [
                         'class' => Service::class, 'choice_label' => 'Libelle'
                     ])
                     ->getForm();


        $form->handleRequest($request);             
        
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($employer);
            $manager->flush();

            return $this->redirectToRoute('listeremployer');
        }
        return $this->render("service/addemployer.html.twig", [
            'formEmployer' => $form->createView(),
            'editer' => $employer->getId() !== NULL
        ]);
    }

    /**
     * @Route("/service/newservice", name="addservice")
     * @Route("/service/{id}/editservice", name="editservice")
     */
    public function CreerService(Request $request, ObjectManager $manager, Service $services = null)
    {
        if (!$services) {
            $services = new Service();
        }

        $form = $this->createFormBuilder($services)
                     ->add('Libelle')
                     ->getForm();


        $form->handleRequest($request);             
        
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($services);
            $manager->flush();

            return $this->redirectToRoute('listerservice');
        }

        return $this->render("service/addservice.html.twig", [
            'formService' => $form->createView()
        ]);
    }

    /**
     * @Route("/service/{id}/del", name="delete")
     */
    public function Supprimer(Service $service=null, Employer $employer=null) {
        $supp = $this->getDoctrine()->getManager();
        if ($service) {
            $supp->remove($service); 
            $supp->flush();

        return $this->redirectToRoute('listerservice');
        }
        else {
            $supp->remove($employer);
            $supp->flush();

        return $this->redirectToRoute('listeremployer');
        }
        
    }

    /**
     * @Route("/", name="accueil")
     */
    public function Accueil() {
        return $this->render("service/accueil.html.twig", [
            'controller_name' => 'ServiceController'
        ]);
        
    }


     /**
     * @Route("/service/{id}/lister/service/employer", name="listerserviceemployer")
     */
    public function listerServiceEmployer(Service $serv)
    {

        $servicesemployers = $serv->getEmployers();

        return $this->render('service/emplserv.html.twig', [
            'servicesemployers' => $servicesemployers
        ]);
    }

}

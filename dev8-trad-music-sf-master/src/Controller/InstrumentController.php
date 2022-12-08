<?php

namespace App\Controller;

use App\Entity\Instrument;
use App\Form\InstrumentType;
use App\Repository\ManagerRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InstrumentController extends AbstractController
{
    #[Route('/instrument/new', name: 'instrument_new')]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, ManagerRegistry $doctrine): Response
    {
        //création d'un nouvel instrument
        $instrument=new Instrument();

        //création du formulaire pour un nouvel instrument
        $form=$this->createForm(InstrumentType::class,$instrument);
        //récupération des données du formulaire
        $form->handleRequest($request);

        //si le formulaire est soumis et valide
        if($form->isSubmitted() && $form->isValid()){
            //Récupération de l'entité manager
            $entityManager=$doctrine->getManager();



            //on récupère les données du formulaire
            $entityManager->persist($instrument);
            //on enregistre les données en base de données
            $entityManager->flush();


            //redirection vers la page d'accueil
            return $this->redirectToRoute('homepage');

        }

        return $this->render('instrument/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}

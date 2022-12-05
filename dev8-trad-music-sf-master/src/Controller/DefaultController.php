<?php

namespace App\Controller;

use App\Entity\Musician;
use App\Repository\GigRepository;
use App\Repository\InstrumentRepository;
use App\Repository\MusicianRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(MusicianRepository $musicienRepository, InstrumentRepository $instrumentRepository,GigRepository $gigRepository): Response
    {
        // Récupérer la liste des instruments en base de données (SELECT * FROM instrument)
        $musicien = $musicienRepository->findAll();
        $instrument = $instrumentRepository->findAll();
        $gig = $gigRepository->findAll();


        // Appel le fichier de template Twig avec la méthode render
        return $this->render('default/homepage.html.twig', [
            'instruments' => $instrument,'musiciens' => $musicien,'gigs' => $gig





        ]);
    }
}

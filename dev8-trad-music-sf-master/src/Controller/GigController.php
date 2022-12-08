<?php

namespace App\Controller;

use App\Entity\Gig;
use App\Repository\GigRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GigController extends AbstractController
{
    #[Route('/gig/{id}', name: 'gig_detail')]
    public function index(Gig $gig): Response
    {
        return $this->render('gig/index.html.twig', [
            'gig'=> $gig,
        ]);
    }
}

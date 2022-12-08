<?php

namespace App\Controller;

use App\Entity\Pub;
use App\Repository\PubRepository;
use http\Client\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PubController extends AbstractController
{
    #[Route('/pub', name: 'app_pub')]
    public function index(Request $request,PubRepository $pubRepository): Response
    {
        $pub = new Pub();
        $pub->setManager($this->getUser());
        $form = $this->createForm(PubType::class, $pub);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $pubRepository->save($pub);


            return $this->redirectToRoute('app_pub');
        }


        return $this->render('pub/index.html.twig', [
            'controller_name' => 'PubController',
        ]);
    }
}

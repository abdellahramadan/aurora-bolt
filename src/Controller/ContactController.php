<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact1111', name: 'contact')]
    public function index(): Response
    {

        return 'hi';
        /*
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);*/
    }
}

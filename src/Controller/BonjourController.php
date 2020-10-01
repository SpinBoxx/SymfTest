<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    /**
     * @Route("/bonjour", name="bonjour")
     */
    public function index($number)
    {
        return $this->render('bonjour/index.html.twig', [
            'controller_name' => 'BonjourController',

        ]);
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LocationContrillerController extends AbstractController
{
    #[Route('/location/contriller', name: 'app_location_contriller')]
    public function index(): Response
    {
        return $this->render('location_contriller/index.html.twig', [
            'controller_name' => 'LocationContrillerController',
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OnDemandController extends AbstractController
{
    #[Route('/ondemand', name: 'app_ondemand')]
    public function index(): Response
    {
        return $this->render('products/ondemand.html.twig');
    }
}

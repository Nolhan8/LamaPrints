<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProductsController extends AbstractController
{
    #[Route('/decorations', name: 'app_decorations')]
    public function decorations(): Response
    {
        return $this->render('products/decorations.html.twig');
    }
    #[Route('/figurines', name: 'app_figurines')]
    public function figurines(): Response
    {
        return $this->render('products/figurines.html.twig');
    }
    #[Route('/toys', name: 'app_toys')]
    public function toys(): Response
    {
        return $this->render('products/toys.html.twig');
    }
}

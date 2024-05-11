<?php
// src/Controller/BootstrapController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BootstrapController extends AbstractController
{
    #[Route('/bootstrap/tooltip', name: 'app_bootstrap_tooltip')]
    public function tooltip(): Response
    {
        return new Response('<h1>Hallo Welt!</h1>');
    }
}

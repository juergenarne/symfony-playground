<?php
// src/Controller/BootstrapController.php
namespace App\Controller;

use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BootstrapController extends AbstractController
{
    #[Route('/bootstrap/tooltip', name: 'app_bootstrap_tooltip')]
    #[Template('bootstrap/tooltip.html.twig')]
    public function tooltip(): array
    {
        return ['title' => 'Hallo Welt!'];
    }
}

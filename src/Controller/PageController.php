<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/qui-sommes-nous', name: 'app_about_us')]
    public function aboutUs(): Response
    {
        return $this->render('page/about_us.html.twig', [
            'title' => 'Qui sommes-nous ?',
        ]);
    }

    #[Route('/politique-de-confidentialite', name: 'app_privacy')]
    public function privacy(): Response
    {
        return $this->render('page/privacy.html.twig', [
            'title' => 'Politique de confidentialité',
        ]);
    }

    #[Route('/cgv', name: 'app_cgv')]
    public function cgv(): Response
    {
        return $this->render('page/cgv.html.twig', [
            'title' => 'Conditions Générales de Vente',
        ]);
    }

    #[Route('/cgu', name: 'app_cgu')]
    public function cgu(): Response
    {
        return $this->render('page/cgu.html.twig', [
            'title' => 'Conditions Générales d\'Utilisation',
        ]);
    }
}

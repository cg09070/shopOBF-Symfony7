<?php

namespace App\Controller;

use App\Repository\NavLinkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(NavLinkRepository $navLinkRepository): Response
    {
        $headerLinks = $navLinkRepository->headerLinks();
        $footerLinks = $navLinkRepository->footerLinks();
        $socialLinks = $navLinkRepository->socialLinks();

        return $this->render('base.html.twig', [
            'headerLinks' => $headerLinks,
            'footerLinks' => $footerLinks,
            'socialLinks' => $socialLinks,
        ]);
    }

    #[Route('/search', name: 'search')]
    public function search(): Response
    {
        return $this->json('replace with search text box');
    }

    #[Route('/cart', name: 'cart')]
    public function cart(): Response
    {
        return $this->json('redirect to cart page');
    }
}

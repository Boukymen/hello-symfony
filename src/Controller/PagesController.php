<?php
// flex.symfony.com
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class PagesController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(Request $request): Response
    {
        // dd(date_default_timezone_get());
        return $this->render('pages/home.html.twig');
    }
    
    #[Route('/about-us', name: 'app_about')]
    public function about(): Response
    {
        // dd(date_default_timezone_get());
        return $this->render('pages/about.html.twig');
    }
}

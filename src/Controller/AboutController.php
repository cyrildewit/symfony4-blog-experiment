<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AboutController extends Controller
{
    /**
     * @Route("/about", methods={"GET"}, name="about_index")
     */
    public function index(): Response
    {
        return $this->render('about/index.html.twig', [
        ]);
    }
}

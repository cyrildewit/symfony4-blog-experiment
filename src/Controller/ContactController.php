<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    /**
     * @Route("/contact", methods={"GET"}, name="contact_index")
     */
    public function index(): Response
    {
        return $this->render('about/index.html.twig', [
        ]);
    }
}

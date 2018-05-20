<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", methods={"GET"}, name="home_index")
     */
    public function index(PostRepository $posts): Response
    {
        $latestPosts = $posts->findLatest();

        return $this->render('home/index.html.twig', [
            'latestPosts' => $latestPosts,
        ]);
    }
}

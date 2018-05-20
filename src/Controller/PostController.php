<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PostController extends Controller
{
    /**
     * @Route("/posts", methods={"GET"}, name="post_index")
     */
    public function index(PostRepository $posts)
    {
        $latestPosts = $posts->findLatest();

        return $this->render('post/index.html.twig', [
            'posts' => $latestPosts,
        ]);
    }

    /**
     * @Route("/posts/{slug}", methods={"GET"}, name="post_show")
     */
    public function show(Post $post)
    {
        return $this->render('post/show.html.twig', [
            'post' => $post,
        ]);
    }
}

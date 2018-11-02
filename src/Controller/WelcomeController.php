<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
            'user_name' => 'Robert',
        ]);

    }


    /**
     * @Route("starter", name="starter")
     */
    public function starter()
    {
        return $this->render('welcome/starter.html.twig');

    }


}

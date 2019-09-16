<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response ;

class TestController extends AbstractController
{
    /**
     * @Route("/bonjour", name="test")
     */
    public function index()
    {
        //return $this->render('test/index.html.twig', [
            //'controller_name' => 'TestController',
        return new Response("Bonjour tous le monde !") ;
        
    }
}

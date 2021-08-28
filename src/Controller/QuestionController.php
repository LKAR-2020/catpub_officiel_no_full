<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController 
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("hello world!!!");
    } 
    /** 
     * @Route("/questions/{slug}") 
     */ 
    public function show($slug)  
    {
        return new Response(sprintf(
            "la page qui affiche les reponses est %s  ", $slug
        ));
    }
}

<?php

namespace Libertribes\JeuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AccueilController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('LibertribesJeuBundle:Accueil:index.html.twig', array('name' => $name));
    }
}

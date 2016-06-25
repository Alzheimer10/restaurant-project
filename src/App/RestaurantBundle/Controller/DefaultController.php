<?php

namespace App\RestaurantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppRestaurantBundle:Default:index.html.twig');
    }

    public function helloAction($name)
    {
        return $this->render('AppRestaurantBundle:Default:hello.html.twig', array('name' => $name));
    }
}

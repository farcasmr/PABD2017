<?php

namespace Uab\BreazBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UabBreazBundle:Default:index.html.twig', array(
          'title' => 'Breaz Marius',
        ));
    }
}

<?php

namespace Uab\FlorinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UabFlorinBundle:Default:index.html.twig', array(
          'title' => 'Florin Stan',
        ));
    }
}

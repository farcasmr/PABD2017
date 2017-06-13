<?php

namespace Uab\RobertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UabRobertBundle:Default:index.html.twig', array(
          'title' => 'Robert',
    
         ));
    }
}

<?php

namespace Uab\SolymosiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UabSolymosiBundle:Default:index.html.twig', array('title' => 'Solymosi Robert', ));
    }
}

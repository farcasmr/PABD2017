<?php

namespace Uab\PocrisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UabPocrisBundle:Default:index.html.twig', array('name'=>'Nicu Pocris', 'email'=>'angelonick@yahoo.com'));
    }
}

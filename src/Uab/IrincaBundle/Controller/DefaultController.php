<?php

namespace Uab\IrincaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UabIrincaBundle:Default:index.html.twig', array(
								'title' => 'Irinca Andreea-Gabriela',
        ));
    }
}

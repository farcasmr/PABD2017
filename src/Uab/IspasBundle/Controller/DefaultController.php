<?php

namespace Uab\IspasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UabIspasBundle:Default:index.html.twig', array(
          'title' => 'Ispas Andrei',
        ));
    }
}

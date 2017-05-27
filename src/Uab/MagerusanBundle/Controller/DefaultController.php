<?php

namespace Uab\MagerusanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UabMagerusanBundle:Default:index.html.twig', array(
          'firstName' => 'Magerusan',
          'lastName' => 'Cristian',
          'age' => '24',
          'profession' => 'Programmer',
          'university' => 'Universitatea "1 Decembrie 1918" Alba Iulia',
          'faculty' => 'Stiinte Exacte si Ingineresti',
          'specialization' => 'Programare Avansata si Baze de Date'
         ));
    }
}

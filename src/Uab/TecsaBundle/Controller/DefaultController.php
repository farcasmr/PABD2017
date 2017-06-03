<?php

namespace Uab\TecsaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UabTecsaBundle:Default:index.html.twig', array(
          'numele' => 'Tecsa Roxana Valentina',
          'varsta' => '24',
          'universitate' => 'Universitatea "1 Decembrie 1918" Alba Iulia',
          'facultate' => 'Stiinte Exacte si Ingineresti',
          'specializare' => 'Programare Avansata si Baze de Date',
          'pasiuni'=>'Urmaritul serialelor,plimbatul prin natura(pe jos sau cu bicicleta), tenisul'
          ));
    }
}

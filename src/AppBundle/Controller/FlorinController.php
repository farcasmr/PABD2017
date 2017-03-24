<?php
// src/AppBundle/Controller/FlorinController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FlorinController extends Controller
{
    /**
     * @Route("/florin/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('florin/number.html.twig', array(
            'number' => $number,
        ));
    }
}

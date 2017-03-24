<?php
// src/AppBundle/Controller/SolymosiController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SolymosiController extends Controller
{
    /**
     * @Route("/solymosi/")
     */
 	public function main()
    	{
        	$number = mt_rand(0, 100);

	        return $this->render('solymosi.html.twig', array(
	            'number' => $number,
        	));
    	}
}
?>

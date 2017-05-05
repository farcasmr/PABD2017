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
	        return $this->render('solymosi/solymosi.html.twig');
    	}
}
?>

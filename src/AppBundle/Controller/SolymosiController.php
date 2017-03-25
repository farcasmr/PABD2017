<?php
// src/AppBundle/Controller/SolymosiController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class SolymosiController
{
    /**
     * @Route("/solymosi/")
     */
	public function main()
	{ 	
	 	return new Response(
            	"<html><body><title>Solymosi Robert</title><h1> Welcome to my page(Solymosi Robert) </h1> <br> Enjoy the content page</body></html>"
		);
	}
}
?>

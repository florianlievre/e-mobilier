<?php

namespace CRW\PlatformBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function indexAction(Request $request)
    {
        return $this->render('CRWPlatformBundle:Contact:index.html.twig');
    }

    public function sendAction(){
/*    	$message = new \Swift_Message('Hello Email')
        ->setFrom('contact@e-mobilier.com')
        ->setTo('recipient@example.com')
        ->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'Emails/registration.html.twig',
                array('name' => $name)
            ),
            'text/html');
	    $this->get('mailer')->send($message);*/
    }
}

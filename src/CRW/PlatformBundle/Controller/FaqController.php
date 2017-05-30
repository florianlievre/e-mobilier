<?php

namespace CRW\PlatformBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FaqController extends Controller
{
    /**
     * @Route("/FAQ", name="faq")
     */
    public function indexAction(Request $request)
    {
        return $this->render('CRWPlatformBundle:FAQ:index.html.twig');
    }
}

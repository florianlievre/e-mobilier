<?php

namespace CRW\PlatformBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AboutController extends Controller
{
    /**
     * @Route("/apropos", name="apropos")
     */
    public function indexAction(Request $request)
    {
        return $this->render('CRWPlatformBundle:About:index.html.twig');
    }
}

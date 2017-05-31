<?php

namespace CRW\PlatformBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CgvController extends Controller
{
    /**
     * @Route("/CGV", name="Mentions Légales")
     */
    public function indexAction(Request $request)
    {
        return $this->render('CRWPlatformBundle:Cgv:index.html.twig');
    }
}
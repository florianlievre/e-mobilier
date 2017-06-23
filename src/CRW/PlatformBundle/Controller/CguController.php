<?php

namespace CRW\PlatformBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CguController extends Controller
{
    /**
     * @Route("/CGU", name="Conditions Générales d'Utilisation")
     */
    public function indexAction(Request $request)
    {
        return $this->render('CRWPlatformBundle:Cgu:index.html.twig');
    }
}
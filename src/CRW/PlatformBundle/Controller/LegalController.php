<?php

namespace CRW\PlatformBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LegalController extends Controller
{
    /**
     * @Route("/mentions-legales", name="Mentions Légales")
     */
    public function indexAction(Request $request)
    {
        return $this->render('CRWPlatformBundle:MentionsLegales:index.html.twig');
    }
}

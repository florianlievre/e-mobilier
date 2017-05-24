<?php

namespace CRW\PlatformBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller {
    /**
     * @Route("/index", name="accueil")
     */
    public function indexAction() {

        // Affichage du template index.html.twig
        return $this->render(
            'default/index.html.twig');
    }
}
?>
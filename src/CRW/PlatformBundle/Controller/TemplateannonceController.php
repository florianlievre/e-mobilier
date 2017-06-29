<?php
/**
 * Created by PhpStorm.
 * User: ssir
 * Date: 28/06/2017
 * Time: 22:10
 */

namespace CRW\PlatformBundle\Controller;

use CRW\PlatformBundle\Entity\Annonce;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class TemplateannonceController extends Controller
{

    /**
     * @Route("/ListeDesBiens", name="listedesbiens")
     */
    public function listeDesBiensAction(Request $request) {
        $annonces = $this->getDoctrine()
            ->getRepository('CRWPlatformBundle:Annonce')
            ->findAll();

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $annonces, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            9/*limit per page*/
        );

        // Affichage du template index.html.twig
        return $this->render(
            'CRWPlatformBundle:Biens:listedesbiens.html.twig',array(
            'annonces' => $result
        ));
    }
}


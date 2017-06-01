<?php

namespace CRW\PlatformBundle\Services;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

class CookiesBanner
{
	protected $templating;

	public function __construct(EngineInterface $templating)
	{
		$this->templating = $templating;
	}

	public function onKernelResponse(FilterResponseEvent $event)
	{
		if (!$event->isMasterRequest()) {
	    	return;
	    }

    	$request = $event->getRequest();
    	$cookies = $request->cookies;

    	if ($cookies !== NULL && $cookies->has('cookies_accepted') && $cookies->get('cookies_accepted') === '1') {
    		return;
    	}

    	if (strpos($event->getResponse()->headers->get('Content-type'), 'text/html') === false) {
			return;
		}

    	$event->getResponse()->setContent($this->addBanner($event->getResponse()->getContent()));
	}

	private function addBanner($content)
	{
		$html = $this->templating->render('CRWPlatformBundle:Cookies:banner.html.twig');

		$content = str_replace(
	    	'<body>',
	    	'<body> ' . $html,
	    	$content
	    );

	    return $content;
	}
}
<?php

namespace Mortal\DumplingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mortal\DumplingBundle\ContentBlock\HomeContent;
use Mortal\DumplingBundle\ContentBlock\AboutContent;
use Mortal\DumplingBundle\ContentBlock\EventContent;
use Mortal\DumplingBundle\ContentBlock\ContactContent;
use Mortal\DumplingBundle\ContentBlock\WhatWeMakeContent;
use Mortal\DumplingBundle\Entity\Email;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DumplingController extends Controller {

	public function indexAction($page) {
		$content = new HomeContent();
		return $this -> render('MortalDumplingBundle:Dumpling:index.html.twig', array('title' => $page, 'content' => $content));
	}

	public function aboutAction($page) {
		$content = new AboutContent();
		return $this -> render('MortalDumplingBundle:Dumpling:about.html.twig', array('title' => $page,'content' => $content));
	}

	public function eventsAction($page) {
		$content = new EventContent();
		return $this -> render('MortalDumplingBundle:Dumpling:events.html.twig', array('title' => $page,'content' => $content));
	}

	public function contactAction($page) {
		$content = new ContactContent();
		return $this -> render('MortalDumplingBundle:Dumpling:contact.html.twig', array('title' => $page,'content' => $content));
	}

	public function whatwemakeAction($page) {
		$content = new WhatWeMakeContent();
		return $this -> render('MortalDumplingBundle:Dumpling:whatwemake.html.twig', array('title' => $page,'content' => $content));
	}
}

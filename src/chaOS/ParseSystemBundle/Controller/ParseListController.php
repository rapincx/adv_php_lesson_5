<?php

namespace chaOS\ParseSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParseListController extends Controller
{
	public function listAction()
	{
		return $this->render('ParseSystemBundle:ParseList:list.html.twig');
	}
}
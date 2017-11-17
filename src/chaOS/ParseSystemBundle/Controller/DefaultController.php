<?php

namespace chaOS\ParseSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ParseSystemBundle:Default:index.html.twig');
    }
    public function showAddFormAction()
    {
    	return $this->render( 'ParseSystemBundle:Default:add-form.html.twig');
    }
}
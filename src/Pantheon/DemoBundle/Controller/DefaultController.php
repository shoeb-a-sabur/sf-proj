<?php

namespace Pantheon\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PantheonDemoBundle:Default:index.html.twig', array());
    }
}

<?php

namespace Jaxara\Project\ShoebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name="Shoeb")
    {
        return $this->render('JaxaraProjectShoebBundle:Default:index.html.twig', array('name' => $name));
    }
}

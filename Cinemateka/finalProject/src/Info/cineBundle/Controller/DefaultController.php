<?php

namespace Info\cineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Info\cineBundle\Entity\Cine; Se lo utiliza una vez que se haya creado la 
//entidad, en este caso el shortcut seria "Cine"

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('cineBundle:Default:index.html.twig', array('name' => $name));
    }
}

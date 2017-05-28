<?php

namespace ConecTI\CRUDUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ConecTICRUDUserBundle:Default:index.html.twig');
    }
}

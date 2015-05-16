<?php

namespace Yoda\EmailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YodaEmailBundle:Default:index.html.twig', array('name' => $name));
    }
}

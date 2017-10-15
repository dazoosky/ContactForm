<?php

namespace ContactFormBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function welcomeAction() {
        return $this->render('ContactFormBundle::message/welcome.html.twig');
    }
}

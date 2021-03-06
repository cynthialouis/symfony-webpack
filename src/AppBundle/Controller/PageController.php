<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    /**
     * @Route("/")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homeAction()
    {
        return $this->render('page/index.html.twig');
    }

    /**
     * @Route("/about")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutAction()
    {
        return $this->render('page/about.html.twig');
    }
}

<?php

namespace Pep\Judo\JapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PepJudoJapBundle:Default:index.html.twig');
    }
}

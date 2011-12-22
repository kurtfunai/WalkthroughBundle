<?php

namespace kurtfunai\WalkthroughBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('kurtfunaiWalkthroughBundle:Default:index.html.twig');
    }
}

<?php
/**
 * Author: http://kurtfunai.com
 * Date: 11-12-22
 */
namespace kurtfunai\WalkthroughBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class WalkthroughController extends Controller
{
    
    public function indexAction()
    {

        return $this->render('kurtfunaiWalkthroughBundle:Walkthrough:index.html.twig');
    }
}

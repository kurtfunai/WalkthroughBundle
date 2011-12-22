<?php
/**
 * Author: http://kurtfunai.com
 * Date: 11-12-22
 */
namespace kurtfunai\WalkthroughBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use kurtfunai\WalkthroughBundle\Entity as Entity;
use kurtfunai\WalkthroughBundle\Form as Form;


class UserController extends Controller
{
    /**
     * By default, displays form to add user to the system.
     * If form has been posted, validates and adds user to database
     * @return \Symfony\Bundle\FrameworkBundle\Controller\Response
     */
    public function addAction()
    {
        $user = new Entity\User();
        $form = $this->get('form.factory')->create(new Form\AddUser(), $user);
        $request = $this->get('request');

        if ($request->getMethod() == 'POST')
        {
            $form->bindRequest($request);
            if ($form->isValid())
            {
                $em = $this->get('doctrine')->getEntityManager();
                $em->persist($user);
                $em->flush();
                $this->get('session')->setFlash('notice', 'You have successfully added '.$user->getFirstName().' '.$user->getLastName().' to the database!');
                return $this->redirect($this->generateUrl('walkthrough_add_user'));
            }
        }

        return $this->render('kurtfunaiWalkthroughBundle:User:add.html.twig',
            array(
            'form' => $form->createView()
            ));
    }
}

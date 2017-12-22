<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
     public function indexAction()
     {
         $em = $this->getDoctrine()->getManager();

         $gifts = $em->getRepository('AppBundle:Gift')->findAll();
         $categories = $em->getRepository('AppBundle:Category')->findAll();

         return $this->render('default/index.html.twig', array(
                     'gifts' => $gifts,
                     'categories' => $categories));
                 }

     /**
     * @Route("/go/", name="go")
     */
    public function goAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gifts = $em->getRepository('AppBundle:Gift')->findAll();

        $message = \Swift_Message::newInstance()
            ->setSubject('Yo Santa!')
            ->setFrom('contact.volupt@gmail.com')
            ->setTo('helene.telliez@gmail.com')
            ->setBody($this->renderView('default/contact.html.twig',array(
                'gifts' => $gifts
            )),'text/html');

        $this->get('mailer')->send($message);

        return $this->redirectToRoute('homepage');
    }

}
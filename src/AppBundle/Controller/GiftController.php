<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Gift;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Gift controller.
 *
 * @Route("gift")
 */
class GiftController extends Controller
{
    /**
     * Lists all gift entities.
     *
     * @Route("/", name="gift_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gifts = $em->getRepository('AppBundle:Gift')->findAll();

        return $this->render('gift/index.html.twig', array(
            'gifts' => $gifts,
        ));
    }

    /**
     * Finds and displays a gift entity.
     *
     * @Route("/{id}", name="gift_show")
     * @Method("GET")
     */
    public function showAction(Gift $gift)
    {

        return $this->render('gift/show.html.twig', array(
            'gift' => $gift,
        ));
    }

    public function sendEmailAction($name, \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Liste de Noel'))
            ->setFrom('send@example.com')
            ->setTo('florian.pdf@gmail.com')
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'emails/registration.html.twig',
                    array('name' => $name)
                ),
                'text/html'
            );

        $mailer->send($message);

        //return $this->redirectToRoute('');

    }
}

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
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/mail")
     */
    public function mailAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gifts = $em->getRepository('AppBundle:Gift')->findAll();
        $message = \Swift_Message::newInstance()
            ->setSubject('Dear Santa')
            ->setFrom('pandoraangora@gmail.com')
            ->setTo('florianpdf@gmail.com')
            ->setBody(
                $this->renderView(
                // app/Resources/views/gift/index.html.twig
                    'gift/index.html.twig',
                    array('gifts' => $gifts)
                ),
                'text/html'
            )

        ;
        $this->get('mailer')->send($message);

        return $this->render('gift/index.html.twig', array(
            'gifts' => $gifts,
        ));
    }
}

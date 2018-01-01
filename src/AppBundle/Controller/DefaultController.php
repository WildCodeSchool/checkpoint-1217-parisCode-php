<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Gift;
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
        // On récupère notre entity manager
        $em = $this->getDoctrine()->getManager();

        // On récupère tous les cadeaux
        $gifts = $em->getRepository(Gift::class)->findAll();
        $categories = $em->getRepository(Category::class)->findAll();

        // On affiche la vue en récupérant tous les cadeaux
        return $this->render('gift/index.html.twig', array(
            'gifts' => $gifts,
            'categories' => $categories
            ));
    }

    /**
     * @Route("/", name="category")
     */
    public function categoryAction()
    {
        // On récupère notre entity manager
        $em = $this->getDoctrine()->getManager();

        // On récupère toutes les catégories
        $categories = $em->getRepository(Category::class)->findAll();

        // On affiche la vue en récupérant toutes les catégories
        return $this->render('category/index.html.twig', array(
            'categories' => $categories
        ));
    }

    /**
     * @Route("/mail")
     */
    public function mailAction()
    {
        $em = $this->getDoctrine()->getManager();

        $gifts = $em->getRepository('AppBundle:Gift')->findAll();
        $message = \Swift_Message::newInstance()
            ->setSubject('Cher Père Noël')
            ->setFrom('emelineancelpirouelle@gmail.com')
            ->setTo('florianpdf@gmail.com')
            ->setBody(
                $this->renderView(
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

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Kid;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Kid controller.
 *
 * @Route("kid")
 */
class KidController extends Controller
{
    /**
     * Lists all kid entities.
     *
     * @Route("/", name="kid_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $kids = $em->getRepository('AppBundle:Kid')->findAll();

        return $this->render('kid/index.html.twig', array(
            'kids' => $kids,
        ));
    }

    /**
     * Creates a new kid entity.
     *
     * @Route("/new", name="kid_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $kid = new Kid();
        $form = $this->createForm('AppBundle\Form\KidType', $kid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($kid);
            $em->flush();

            return $this->redirectToRoute('kid_show', array('id' => $kid->getId()));
        }

        return $this->render('kid/new.html.twig', array(
            'kid' => $kid,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a kid entity.
     *
     * @Route("/{id}", name="kid_show")
     * @Method("GET")
     */
    public function showAction(Kid $kid)
    {
        $deleteForm = $this->createDeleteForm($kid);

        return $this->render('kid/show.html.twig', array(
            'kid' => $kid,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing kid entity.
     *
     * @Route("/{id}/edit", name="kid_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Kid $kid)
    {
        $deleteForm = $this->createDeleteForm($kid);
        $editForm = $this->createForm('AppBundle\Form\KidType', $kid);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('kid_edit', array('id' => $kid->getId()));
        }

        return $this->render('kid/edit.html.twig', array(
            'kid' => $kid,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a kid entity.
     *
     * @Route("/{id}", name="kid_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Kid $kid)
    {
        $form = $this->createDeleteForm($kid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($kid);
            $em->flush();
        }

        return $this->redirectToRoute('kid_index');
    }

    /**
     * Creates a form to delete a kid entity.
     *
     * @param Kid $kid The kid entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Kid $kid)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('kid_delete', array('id' => $kid->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

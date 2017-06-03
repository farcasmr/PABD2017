<?php

namespace Uab\FlorinBundle\Controller;

use Uab\FlorinBundle\Entity\Universitate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Universitate controller.
 *
 */
class UniversitateController extends Controller
{
    /**
     * Lists all universitate entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $universitates = $em->getRepository('UabFlorinBundle:Universitate')->findAll();

        return $this->render('UabFlorinBundle:Universitate:index.html.twig', array(
            'universitates' => $universitates,
        ));
    }

    /**
     * Creates a new universitate entity.
     *
     */
    public function newAction(Request $request)
    {
        $universitate = new Universitate();
        $form = $this->createForm('Uab\FlorinBundle\Form\UniversitateType', $universitate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($universitate);
            $em->flush($universitate);

            return $this->redirectToRoute('universitate_show', array('id' => $universitate->getId()));
        }

        return $this->render('UabFlorinBundle:Universitate:new.html.twig', array(
            'universitate' => $universitate,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a universitate entity.
     *
     */
    public function showAction(Universitate $universitate)
    {
        $deleteForm = $this->createDeleteForm($universitate);

        return $this->render('UabFlorinBundle:Universitate:show.html.twig', array(
            'universitate' => $universitate,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing universitate entity.
     *
     */
    public function editAction(Request $request, Universitate $universitate)
    {
        $deleteForm = $this->createDeleteForm($universitate);
        $editForm = $this->createForm('Uab\FlorinBundle\Form\UniversitateType', $universitate);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('universitate_edit', array('id' => $universitate->getId()));
        }

        return $this->render('UabFlorinBundle:Universitate:edit.html.twig', array(
            'universitate' => $universitate,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a universitate entity.
     *
     */
    public function deleteAction(Request $request, Universitate $universitate)
    {
        $form = $this->createDeleteForm($universitate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($universitate);
            $em->flush($universitate);
        }

        return $this->redirectToRoute('universitate_index');
    }

    /**
     * Creates a form to delete a universitate entity.
     *
     * @param Universitate $universitate The universitate entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Universitate $universitate)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('universitate_delete', array('id' => $universitate->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

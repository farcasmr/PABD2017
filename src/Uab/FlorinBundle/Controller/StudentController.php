<?php

namespace Uab\FlorinBundle\Controller;

use Uab\FlorinBundle\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Student controller.
 *
 */
class StudentController extends Controller
{
    /**
     * Lists all student entities.
     *
     */
    public function indexAction($uniId)
    {
        $em = $this->getDoctrine()->getManager();

        //$students = $em->getRepository('UabFlorinBundle:Student')->findAll();
        $students = $em->getRepository('UabFlorinBundle:Student')
            ->findBy(
                array('universitate' => $uniId),
                array('nume' => 'ASC')
            );

        return $this->render('UabFlorinBundle:Student:index.html.twig', array(
            'students' => $students,
            'uniId' => $uniId,
        ));
    }

    /**
     * Creates a new student entity.
     *
     */
    public function newAction(Request $request, $uniId)
    {
        $em = $this->getDoctrine()->getManager();

        $student = new Student();
        $preselectedUni = $em
            ->getRepository('UabFlorinBundle:Universitate')
            ->find($uniId);
        $form = $this->createForm('Uab\FlorinBundle\Form\StudentType', $student, array('preselectedUni' => $preselectedUni));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($student);
            $em->flush($student);

            return $this->redirectToRoute('student_show', array('id' => $student->getId(), 'uniId' => $uniId));
        }

        return $this->render('UabFlorinBundle:Student:new.html.twig', array(
            'student' => $student,
            'uniId' => $uniId,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a student entity.
     *
     */
    public function showAction(Student $student, $uniId)
    {
        $deleteForm = $this->createDeleteForm($student, $uniId);

        return $this->render('UabFlorinBundle:Student:show.html.twig', array(
            'student' => $student,
            'uniId' => $uniId,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing student entity.
     *
     */
    public function editAction(Request $request, Student $student, $uniId)
    {
        $deleteForm = $this->createDeleteForm($student, $uniId);
        $editForm = $this->createForm('Uab\FlorinBundle\Form\StudentType', $student);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('student_edit', array('id' => $student->getId(), 'uniId' => $uniId));
        }

        return $this->render('UabFlorinBundle:Student:edit.html.twig', array(
            'student' => $student,
            'uniId' => $uniId,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a student entity.
     *
     */
    public function deleteAction(Request $request, Student $student, $uniId)
    {
        $form = $this->createDeleteForm($student, $uniId);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($student);
            $em->flush($student);
        }

        return $this->redirectToRoute('student_index', array('uniId' => $uniId));
    }

    /**
     * Creates a form to delete a student entity.
     *
     * @param Student $student The student entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Student $student, $uniId)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('student_delete', array('id' => $student->getId(), 'uniId' => $uniId)))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

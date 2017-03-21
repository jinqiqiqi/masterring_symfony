<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Workspace;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Workspace controller.
 *
 */
class WorkspaceController extends Controller
{
    /**
     * Lists all workspace entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $workspaces = $em->getRepository('AppBundle:Workspace')->findAll();

        return $this->render('workspace/index.html.twig', array(
            'workspaces' => $workspaces,
        ));
    }

    /**
     * Creates a new workspace entity.
     *
     */
    public function newAction(Request $request)
    {
        $workspace = new Workspace();
        $form = $this->createForm('AppBundle\Form\WorkspaceType', $workspace);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($workspace);
            $em->flush();

            return $this->redirectToRoute('workspace_show', array('id' => $workspace->getId()));
        }

        return $this->render('workspace/new.html.twig', array(
            'workspace' => $workspace,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a workspace entity.
     *
     */
    public function showAction(Workspace $workspace)
    {
        $deleteForm = $this->createDeleteForm($workspace);

        return $this->render('workspace/show.html.twig', array(
            'workspace' => $workspace,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing workspace entity.
     *
     */
    public function editAction(Request $request, Workspace $workspace)
    {
        $deleteForm = $this->createDeleteForm($workspace);
        $editForm = $this->createForm('AppBundle\Form\WorkspaceType', $workspace);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('workspace_edit', array('id' => $workspace->getId()));
        }

        return $this->render('workspace/edit.html.twig', array(
            'workspace' => $workspace,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a workspace entity.
     *
     */
    public function deleteAction(Request $request, Workspace $workspace)
    {
        $form = $this->createDeleteForm($workspace);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($workspace);
            $em->flush();
        }

        return $this->redirectToRoute('workspace_index');
    }

    /**
     * Creates a form to delete a workspace entity.
     *
     * @param Workspace $workspace The workspace entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Workspace $workspace)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('workspace_delete', array('id' => $workspace->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

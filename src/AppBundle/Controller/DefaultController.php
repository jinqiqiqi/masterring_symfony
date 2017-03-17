<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
	
	/**
	 * @Route("/about/{name}", name="about_page", defaults={"name": null})
	 *
	 */
	public function aboutAction($name) {
        $user = null;
		if ($name) {
           $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(['name' => $name]);
           if (false === $user instanceof User) {
            throw $this->createNotFoundException('No user named '. $name. ' found!');
           }
        }
        return $this->render('::default/about.html.twig', [
            'user' => $user,
        ]);
	}


    /**
     * @Route("/more/{name}", name="more_page", defaults={"name": null})
     */
    public function moreAction($name)
    {
        $user = null;
        if ($name) {
           $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(['name' => $name]);
           if (false === $user instanceof User) {
            throw $this->createNotFoundException('No user named '. $name. ' found!');
           }
        }
        return $this->render('::default/more.html.twig', [
            'user' => $user
        ]);
    }
}


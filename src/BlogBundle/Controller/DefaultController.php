<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use AppBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * @Route("/blog")
     */
    public function indexAction()
    {
        return $this->render('BlogBundle:Default:index.html.twig');
    }
    
    /**
     * @Route("/blog/about/{name}", name="blog_about", defaults={"name": null})
     */
    public function aboutAction($name) {
        
        if ($name) {
           $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneBy(['name' => $name]);
           if (false === $user instanceof User) {
            throw $this->createNotFoundException('No user named '. $name. ' found!');
           }
        }
        return $this->render('BlogBundle:Default:about.html.twig', [
            'user' => $user,
        ]);
    }
}

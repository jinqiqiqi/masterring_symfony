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
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'vars' => array(1,2,3, 9 , 4, 19, 6)
        ));
    }

    /**
     * @Route("/top", name="top_articles")
     */
    public function topArticlesAction()
    {
        $articles = "11";
        return $this->render('default/top_articles.html.twig', [
            'articles' => $articles
        ]);
    }
}

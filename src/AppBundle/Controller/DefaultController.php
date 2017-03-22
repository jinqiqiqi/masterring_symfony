<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'vars' => array(1,2,3, 9 , 4, 19, 6)
        ));
    }

    /**
     * @Route("/top/{username}", name="top_articles", defaults={"username": null})
     */
    public function topArticlesAction(Request $request, $username)
    {
        $session = $request->getSession();
        $session->set('foo', 'bar');
        $foo = $session->get('foo');

        dump($foo);

        $articles = "11";
        return $this->render('default/top_articles.html.twig', [
            'articles' => $articles,
            'username' => $username
        ]);
    }

    /**
     * @Route("/raw", name="raw_response")
     */
    public function rawAction(Request $request)
    {
        return new Response("hi: ");
    }

    /**
     * @Route("/redirect", name="redirect")
     */
    public function redirectAction()
    {
        $this->addFlash('notice', 'Congratulations, your action succeeded!');
        return $this->redirectToRoute('top_articles', ["username" => "yolanda"]);
    }
}

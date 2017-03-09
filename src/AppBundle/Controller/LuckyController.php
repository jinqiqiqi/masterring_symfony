<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number", name="app_lucky_number")
     */
    public function numberAction(Request $request)
    {
        //return $this->file('robots.txt', 'robots.txt', ResponseHeaderBag::DISPOSITION_INLINE);
    
        //return $this->json(['username' => 'eric.king']);
        //$session = $request->getSession();
        //$session->set('foo', 'bar');
        //
        //
        $number = mt_rand(0, 100);
        //throw $this->createNotFoundException('The product does not exist.');
        $this->addFlash(
            'notice',
            '==> Your changes were saved.'
        );

        return $this->render('AppBundle:Lucky:number.html.twig', array(
            'number' => $number
        ));
    }

}

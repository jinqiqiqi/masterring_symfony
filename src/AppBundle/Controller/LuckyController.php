<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number", name="app_lucky_number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);
        return $this->render('AppBundle:Lucky:number.html.twig', array(
            'number' => $number
        ));
    }

}

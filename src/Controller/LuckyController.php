<?php

namespace App\Controller;

// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// class LuckyController
class LuckyController extends AbstractController
{
    /**
      * @Route("/lucky/number")
      */
    public function number()
    {
        $test = "Hello World";
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'test' => $test, 'number' => $number,
        // return new Response(
        //     '<html><body>Lucky number: '.$number.'</body></html>'
        ]);
    }
}
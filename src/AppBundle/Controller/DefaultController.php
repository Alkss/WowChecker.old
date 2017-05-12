<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("test", name="homepage")
     */
    public function ramdomNumber(){
        $number = mt_rand(0, 10);
            '<html><body>Lucky number: '.$number.'</body></html>'
    }
}

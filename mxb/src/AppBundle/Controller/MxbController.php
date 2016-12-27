<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/12/25
 * Time: 16:43
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MxbController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
       return $this->render('index.html.php');
    }
	
	 /**
     * @Route("/checkip", name="checkip")
     */
	public function checkipAction(Request $request)
    {
        // replace this example code with whatever you need
       return $this->render('checkip.html.php');
    }
}
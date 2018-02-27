<?php

namespace AppBundle\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * @Route("/admin")
 */

class HomepageController extends Controller
{
    /**
     * @Route("/", name="admin.homepage.index")
     */
    public function indexAction()
    {


       return $this->render('admin/homepage/index.html.twig',[
        ]);
    }


}

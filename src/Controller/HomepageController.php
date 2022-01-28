<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController
{

    /**
     * @Route("/", name="homepage_index")
     */
    public function index()
    {
        echo 'Hello';
    }
}

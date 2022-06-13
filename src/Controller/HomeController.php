<?php

namespace Controller;

class HomeController extends \Library\Core\AbstractController
{

    public function index()
    {
        $this->render('Home', 'home');
    }
}

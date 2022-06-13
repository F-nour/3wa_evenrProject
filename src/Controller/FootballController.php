<?php

namespace Controller;

class FootballController extends \Library\Core\AbstractController
{
    public function index()
    {
        $this->render('football', 'football');
    }
}
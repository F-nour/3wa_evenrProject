<?php

namespace Controller;

class MarathonController extends \Library\Core\AbstractController
{
    public function index()
    {
        $this->render('marathon', 'marathon');
    }
}
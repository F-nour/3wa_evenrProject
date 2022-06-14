<?php

namespace Controller;

class MarathonController extends \Library\Core\AbstractController
{
    public function index()
    {
        $this->render('marathon', 'marathon');
    }

    private function getAll()
    {
        $manager = new \Model\Manager\EventManager();
        $events = $manager->getByCategory(2);
        return $events;
    }
}
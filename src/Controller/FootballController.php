<?php

namespace Controller;

class FootballController extends \Library\Core\AbstractController
{
    public function index()
    {
        $this->render('football', 'football');
        $this->getAll();
    }

    private function getAll()
    {
        $manager = new \Model\Manager\EventManager();
        $events = $manager->getByCategory(1);
        return $events;
    }
}
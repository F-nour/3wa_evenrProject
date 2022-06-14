<?php

namespace Controller;

class HomeController extends \Library\Core\AbstractController
{

    public function index()
    {
        $this->render('Home', 'home', [
            'lastsEvents' => $this->displayEvents(),
        ]);
    }

    public function displayEvents()
    {
        $eventManager = new \Model\Manager\EventManager();
        return $eventManager->getLastsEvents();
    }
}

<?php

namespace Library\Core;

class AbstractController
{
    public function render($title, $view, $params = [])
    {
        $title = ucfirst($title);
        extract($params);
        $template = "Views/$view.phtml";
        require "Views/layout.phtml";
    }
}

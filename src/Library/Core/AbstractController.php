<?php

namespace Library\Core;

class AbstractController
{
    public function render($title, $view, $params = [])
    {
        extract($params);
        $template = "Views/$view.phtml";
        require "Views/layout.phtml";
    }
}

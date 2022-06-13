<?php


function url(string $path): string
{
    return $_SERVER['SCRIPT_NAME'] . $path;
}

return [
    '/' => [
        '\Controller\HomeController',
        'index'
    ],
    '/football' => [
        '\Controller\FootballController',
        'index'
    ],
    '/marathon' => [
        '\Controller\MarathonController',
        'index'
    ],
];

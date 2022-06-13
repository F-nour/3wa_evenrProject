<?php

// Autoloader
// Fonction appelée lorsque l'on essaie d'instancier une classe
spl_autoload_register(function ($className) {
// On change le sens des \ en /
$fileName = str_replace('\\', '/', $className);

// On inclut le fichier
require "src/$fileName.php";
});
<?php

require_once './vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig = new Twig_Environment($loader, array(
  'cache' => '/path/to/compilation_cache',
));

echo 'Hello world!';

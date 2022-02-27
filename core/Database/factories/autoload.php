<?php 

$pathFactory = './core/Database/factories/';

$files = array_diff(scandir($pathFactory), array('.', '..', 'autoload.php'));
foreach ($files as $file){
    if (strpos($file, '.php') !== false)
    {
        require_once $pathFactory . '/' . $file;
    }
}
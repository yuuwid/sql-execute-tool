<?php 

$path = './core/';

$directories = array_diff(scandir($path), array('.', '..', 'bootstrap.php'));

foreach ($directories as $dir){
    $files = array_diff(scandir($path . $dir), array('.', '..'));
    foreach ($files as $file){
        if (strpos($file, '.php') !== false)
        {
            require_once $path . $dir . '/' . $file;
        }
    }
}

$db = new Database();
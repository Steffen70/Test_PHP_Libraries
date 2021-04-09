<?php
//Composer require linq/php-linq

use \Linq\LinqFactory;

$linq = LinqFactory::createLinq();

$basename = basename(__FILE__);
$dir = dirname(__FILE__);

$requirements = $linq
    ->from(scandir($dir))
    ->where(function ($filename) use ($basename) {
        return $filename != $basename && pathinfo($filename)['extension'] == 'php';
    })
    ->select(function ($filename) use ($dir) {
        return "$dir/$filename";
    });

foreach($requirements as $requirement)
    require $requirement;
    
/*
//Without phpLinq package
$basename = basename(__FILE__);
$dir = dirname(__FILE__);
foreach (scandir($dir) as $filename) {
    if ($filename == $basename) {
        continue;
    }

    $path = "$dir/$filename";
    if (pathinfo($filename)['extension'] == 'php') {
        require $path;
    }
}
*/
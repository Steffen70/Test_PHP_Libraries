<?php
require __DIR__ . '/vendor/autoload.php';
require '.\HelloCommand.php';
use Symfony\Component\Console\Application;

$app = new Application();
$app->add(new HelloCommand());
$app->run();

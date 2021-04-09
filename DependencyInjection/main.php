<?php
require './vendor/autoload.php';
require './Greeter.php';
require './Teacher.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$container = new ContainerBuilder();

$container->setParameter('greeter.text', 'Saletti');
$container->setParameter('greeter.name', 'Mario');

$container
    ->register('greeter', 'Greeter')
    ->setArguments(['%greeter.text%', '%greeter.name%']);

$container
    ->register('teacher', 'Teacher')
    ->setArguments(array(new Reference('greeter'), 'John Doe'));

$teacher = $container->get('teacher');
$teacher->setClass(["Harry", "Jenny", "Mario"]);

$teacher->greet();

$teacher->greet('Johnny');

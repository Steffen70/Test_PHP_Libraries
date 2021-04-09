<?php

require 'Promoter.php';
require 'model/autoload.php';

$promoter = new Promoter(__DIR__ . '/views');

$component_data = json_encode(new SimpleComponent('Test', 'Hello World!'));
//print_r($component_data);

print $promoter->getRenderedComponent('index', $component_data);
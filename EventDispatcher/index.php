<?php
require "./vendor/autoload.php";
require "./model/autoload.php";

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcher;

$listener = new UserListener();
$dispatcher = new EventDispatcher();

$dispatcher
   ->addListener(
       UserRegisteredEvent::NAME,
       array($listener, 'onUserRegistrationAction')
   );

$user = new User("John", 25);
$dispatcher->dispatch(UserRegisteredEvent::NAME, new UserRegisteredEvent($user));

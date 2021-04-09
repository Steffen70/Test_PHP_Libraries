<?php
use Symfony\Component\EventDispatcher\Event;

class UserListener
{
    public function onUserRegistrationAction(Event $event)
    {
        $user = $event->getUser();
        print $user->toString();
    }
}

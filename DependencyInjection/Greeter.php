<?php

class Greeter
{
    private $text;
    protected $name;
    
    public function __construct($text, $name)
    {
        $this->text = $text;
        $this->name = $name;
    }

    public function greet($name = null)
    {
        if($name == null)
            $name = $this->name;
        echo $this->text . ", " . $name . "\r\n";
    }
}

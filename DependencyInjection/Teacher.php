<?php

class Teacher extends Greeter
{
    private $greeter;
    private $class;
    private $fullName;

    public function __construct(\Greeter $greeter, $fullName)
    {
        $this->fullName = $fullName;
        parent::__construct("Welcome to my course, my name is $fullName", 'but you can call me');
        $this->greeter = $greeter;
    }

    public function setClass(array $class)
    {
        $this->class = $class;
    }

    public function greet($name = null)
    {
        if ($name == null) {
            $name = str_replace(
                "can",
                "should",
                sprintf("{$this->name} Sir %s", substr($this->fullName, strrpos($this->fullName, ' ') + 1))
            );
        } else {
            $name = $this->name . ' ' . $name;
        }
        
        parent::greet($name);
        foreach ($this->class as $schueler) {
            $this->greeter->greet($schueler);
        }
    }
}

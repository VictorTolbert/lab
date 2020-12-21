<?php

class Person extends CI_Model
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {
        //
    }

    public function favorite_team()
    {
        //
    }

    private function things_that_keep_you_up_at_night()
    {
        //
    }
}

// $method = new \ReflectionMethod(Person::class, 'things_that_keep_you_up_at_night');
// $method->setAccessible(true);
// $person = new Person('Bob');
// $method->invoke($person);

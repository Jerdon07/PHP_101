<?php

require 'functions.php';
// require 'router.php';

// Connect to our MySQL Database.
//PHP Data Objects (PDO) is a database access layer providing a uniform method of access to multiple databases.

class Person{
    public $name;
    public $age;

    public function breathe() {
        echo $this->name . " is breathing. ";
        echo "<br> Inhale... Exhale...";
    }
}

$person = new Person();

$person->name = "John";
$person->age = 30;
$person->breathe();
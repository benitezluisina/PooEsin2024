<?php
class Persona {


    public $name;
    protected $surname;

    public function __construct($name, $surname) {

        $this->name = $name;
        $this->surname = $surname;

    }
}

$persona1 = new Persona("Mario", "Rossi");

var_dump($persona1->name);  //Mario

var_dump($persona1->surname);  //Cannot access protected property Persona::$surname
?>
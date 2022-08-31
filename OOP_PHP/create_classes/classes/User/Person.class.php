<?php

namespace User;

class Person{

    private $name = "";
    private $age = 0;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    //getters and setters
    public function getName() {return $this->name;}
    public function setName($name) {$this->name = $name;}
    public function getAge() {return $this->age;}
    public function setAge($age) {$this->age = $age;}

    //toString
    public function __toString() {
        return "Name: " . $this->name . " | Age: " . $this->age . "<br><br>";
    }
}
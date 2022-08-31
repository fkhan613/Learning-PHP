<?php

namespace User;

class Employee extends User{

    //property for employee
    private $role = "";
    private static $race = "HUMAN";

    //constructor
    public function __construct($fName, $lName, $age, $role){ 
        parent::__construct($fName, $lName, $age);
        $this->role = $role;
    }

    //destructor
    public function __destruct(){
        echo($this->__toString());
    }

    //getter & getter
    public function getRole(){return $this->role;}
    public static function getRace(){return self::$race;}
    public static function setRace($race){self::$race = $race;}

    public function __toString(){
        return "<strong>EMPLOYEE</strong><br>ID: " . parent::getId() . 
        "<br>First Name: " . parent:: getfName() . "<br>Last Name: " . parent:: getlName() . "<br>Role: " . $this->role . "<br>Race: " . self::getRace() . "<br><br>"; 
    }
}
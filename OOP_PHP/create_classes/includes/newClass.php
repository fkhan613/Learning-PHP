<?php

abstract class User{

    //declaring the properties of a User
    private $fName ="";
    private $lName ="";
    private $age = 0;
    private $id = 0;
    private static $nextID = 1;

    //constructor
    public function __construct($fName, $lName, $age){
        $this->fName = $fName;
        $this->lName = $lName;
        $this->age = $age;
        $this->id = self::$nextID;
        self::$nextID++;
    }


    //getters
    public function getfName(){return $this->fName;}
    public function getlName(){return $this->lName;}
    public function getAge(){return $this->age;}
    public function getId(){return $this->id;}
}

class Employee extends User{

    //property for employee
    private $role = "";

    //constructor
    public function __construct($fName, $lName, $age, $role){ 
        parent::__construct($fName, $lName, $age);
        $this->role = $role;
    }

    //destructor
    public function __destruct(){
        echo($this->__toString());
    }

    //getter
    public function getRole(){return $this->role;}

    public function __toString(){
        return "<strong>EMPLOYEE</strong><br>ID: " . parent::getId() . 
        "<br>First Name: " . parent:: getfName() . "<br>Last Name: " . parent:: getlName() . "<br>Role: " . $this->role . "<br><br>"; 
    }
}
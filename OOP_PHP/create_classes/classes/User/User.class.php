<?php

namespace User;

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


    //getters & setters
    public function getfName(){return $this->fName;}
    public function getlName(){return $this->lName;}
    public function getAge(){return $this->age;}
    public function getId(){return $this->id;}
}


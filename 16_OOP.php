<?php
/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User{
    // Properties
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    private $name = "";
    private $email = "";
    private $password = "";
    private $id = 0;
    private static $nextID = 1;

    //constructor
    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->id = self::$nextID;
        self::$nextID++;
    }

    //getters
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getID(){
        return $this->id;
    }

    //setters
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->password = $password;
    }

    //methods
    public function __toString(){
        return  "ID: " . $this->id . "<br>Name: " . $this->name . "<br>Email: " . $this->email . "<br>Password: " . $this->password;
    }
}

class employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }
}

//instantiate user object
$user = new User('Farhan', 'fkhan6@ocdsb.ca', '123456');
echo($user);
?>
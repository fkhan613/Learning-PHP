<?php 

class Users extends Database{

    protected function getUser($fName){
        $sql = "SELECT * FROM user_info WHERE first_name = ?"; //statement
        $stmt = $this->connect()->prepare($sql); //preparing the database
        $stmt->execute([$fName]); //execute the statement
        $users = $stmt->fetchAll(); //get assoc array of records

        return $users; //return array to where it was called
    }

    protected function setUser($fName, $lName, $email, $password){
        $sql = "INSERT INTO user_info(first_name, last_name, email, password) VALUES (?, ?, ?, ?)"; //statement
        $stmt = $this->connect()->prepare($sql); //preparing the database
        $stmt->execute([$fName, $lName, $email, $password]); //execute the statement
    }
}
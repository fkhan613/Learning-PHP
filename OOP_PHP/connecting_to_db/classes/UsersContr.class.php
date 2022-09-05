<?php 

class UsersContr extends Users{

    public function createUser($fName, $lName, $email, $password){

        $this-> setUser($fName, $lName, $email, $password);
    }
}
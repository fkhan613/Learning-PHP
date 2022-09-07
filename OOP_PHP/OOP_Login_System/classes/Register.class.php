<?php

class Register extends Database {

    //this function checks if the email already exists in the database
    protected function checkUser($email){
        
        //prepared statement 
        $stmt = $this->connect()->prepare("SELECT * FROM user_info WHERE email = ?");

        //check if stmt got exceuted
        if(!$stmt->execute([$email])){
            $stmt = null;
            echo("<script>alert('Error with query'); window.location='../client/index.php';</script>");
            exit();
        }

        //initialize the result variable
        $isClear = false;

        //check if email already exists in the database
        if($stmt->rowCount() > 0){
            $isClear = false;
        } else{
            $isClear = true;
        }
        
        return $isClear;
    }
}
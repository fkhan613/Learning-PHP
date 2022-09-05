<?php

class Test extends Database{

    public function getUsers(){
        $sql = "SELECT * FROM user_info";
        $stmt = $this->connect()->query($sql);
        
        while ($row = $stmt->fetch()){
            echo($row['first_name'] . " " . $row['last_name'] . " " . $row['email'] . " " . $row['password'] . "<br><br><hr>");
        }
    }

    public function getUsersPRSTMT($fName,){
        $sql = "SELECT * FROM user_info WHERE first_name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fName]);
        $users = $stmt->fetchAll();

        foreach($users as $user){
            echo($user['first_name'] . " " . $user['last_name'] . "<br><br><hr>");
        }
    }

    public function setUserPRSTMT($fName, $lName, $email, $password){
        $sql = "INSERT INTO user_info(first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fName, $lName, $email, $password]);
    }
}
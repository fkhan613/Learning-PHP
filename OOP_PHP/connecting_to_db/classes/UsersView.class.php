<?php

class UsersView extends Users{

    public function showUsers($name){

        $users = $this->getUser($name);

        foreach($users as $user){
            echo($user['first_name'] . "    " . $user['last_name'] . "    " . $user['email'] . "<br><br><hr>");
        }
    }
}
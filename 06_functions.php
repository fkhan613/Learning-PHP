<?php

registerUser('John Doe', 'password', 'example@gmail.com');
echo sum(1, 2).'<br>';

function registerUser($username, $password, $email) {
    echo "User has been registered successfully! <br>";
    echo "${username} has been registered with the password '${password}' and email ${email} <br>";
}

function sum($n1,$n2){
    return $n1 + $n2;
}

$subtract = function($n1, $n2){
    return $n1 - $n2;
};

echo $subtract(10, 5).'<br>';

$multiply = fn($n1, $n2) =>  $n1 * $n2;

echo $multiply(5,9).'<br>';
?>
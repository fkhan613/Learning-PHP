<?php

class Database{

    private $host = "localhost";
    private $user = "farhankhan";
    private $pwd = "farhan12345";
    private $dbName = "login_register_system";

    protected function connect(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $PDO = new PDO($dsn, $this->user, $this->pwd);
        $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $PDO; 
    }
}
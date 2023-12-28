<?php

class Database{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";

    public function __construct()
    {
        try {
            $conn = new PDO("mysql:host=". $this->servername .";dbname=Blog", $this->username, $this->password);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          } catch(PDOException $e) {

            echo "Connection failed: " . $e->getMessage();

            die();
          }
    }


}
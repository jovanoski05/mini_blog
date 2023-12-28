<?php

class Database{

    protected $servername;
    protected $username;
    protected $password;


    protected $config;

    public function __construct()
    {

      $this->config = require_once(BASE_PATH ."config.php");
      $this->config = $this->config["Database"];

      $this->servername = $this->config["servername"];
      $this->username = $this->config["username"];
      $this->password = $this->config["password"];

        try {
            $conn = new PDO("mysql:host=". $this->servername .";dbname=Blog", $this->username, $this->password);
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          } catch(PDOException $e) {

            echo "Connection failed: " . $e->getMessage();

            die();
          }
    }


}
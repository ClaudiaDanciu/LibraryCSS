<?php

 class DBH {
     private $servername;
     private $username;
     private $password;
     private $dbname;
     
     public function connect() {
         $this->servername ="localhost";
         $this->username="root";
         $this->password="";
         $this->dbname="Library"; 
         
         try {
             $dsn="mysql:host=".$this->servername.";dbname=".$this->dbname;
             $pdo=new PDO($dsn, $this->username, $this->password);
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             return $pdo;
             
         } catch (Exception $e) {
             echo"connection faile dumb".$e->getMessage();
         }
     }
     
 }
 
 ?>
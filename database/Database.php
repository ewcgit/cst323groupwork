<?php

class Database
{
    private $dbservername = "";
    private $dbusername = "";
    private $dbpassword = "";
    private $dbname = "";

    function getConnection(){
        $conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
        if($conn->connect_error){
            echo "Connection Failed".$conn->connect_error."<br>";
        }else{
            return $conn;
        }
    }

}
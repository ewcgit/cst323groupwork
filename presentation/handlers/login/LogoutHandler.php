<?php
include_once "../../../header.php";
require_once "../../../Autoloader.php";

if(isset($_SESSION['id'])){
    session_destroy();
    header("location:index.php");
}else{
    echo"Nothing to log out, please login!"."<br>";
}
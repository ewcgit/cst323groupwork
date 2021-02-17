<?php
include_once "../../../header.php";
require_once "../../../Autoloader.php";

$username = $_POST['username'];
$password = $_POST['password'];
$authService = new SecurityService();
$userService = new UserBusinessService();

if($authService->authUser($username, $password)){
    $user = $userService->findUserByUsername($username);
    $_SESSION['id']=$user->getId();
    header("Location:index.php");
}else{
    echo "There was an error logging in, please make sure your username and password are correct"."<br>";
}

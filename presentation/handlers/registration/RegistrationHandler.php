<?php
include_once "../../../header.php";
require_once "../../../Autoloader.php";

$FIRST_NAME = $_POST['firstName'];
$LAST_NAME = $_POST['lastName'];
$USERNAME = $_POST['username'];
$PASS = $_POST['password'];

$service = new UserBusinessService();
$service->createuser($FIRST_NAME, $LAST_NAME, $USERNAME, $PASS);
include "../../views/login/LoginPage.php";

?>
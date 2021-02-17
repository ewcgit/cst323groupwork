<?php

include_once "header.php";

?>

<html>
<head>
<title>Home Page</title>
<title>Login/Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<center><img src="images/logo.png" alt="Logo" width="300" height="300"></center>
	<style>
	body {
        background-color: #d3d8dd;
    }
	</style>
</head>
<body>
<div class="container">

<h1>Welcome <?php if(!isset($_SESSION['username'])){echo "guest!";}else{echo $_SESSION['username'];}; ?></h1>
</br>
<a href="presentation/views/movies/Movies.php">View Movies</a>
</br>

<?php if(!isset($_SESSION['username'])){
    echo "<a align='float-right' href='presentation/views/login/LoginPage.php'>LOGIN PAGE</a> <br></br>";
    echo "<a align='float-right' href='presentation/views/registration/RegistrationPage.php'>REGISTRATION PAGE</a>";
}
else{
    echo "<a href='presentation/handlers/login/LogoutHandler.php'>LOGOUT</a>";
}
?>

</div>

<footer>
	<center>Copyright Fresh Apples 2021</center>
</footer>
</body>
</html>
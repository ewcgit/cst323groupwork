<?php
include_once "../../../header.php";
require_once "../../../Autoloader.php";
?>


<html>
<head>
    <title>Login/Registration</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #d3d8dd;
        }
    </style>
    <center><img src="../../../images/logo.png" alt="Logo" width="200" height="200"></center>
</head>
<body>

<div class="container">
    <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login Form:</h2>
                <form action="../../handlers/login/LoginHandler.php" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
            <div class="col-md-6 login-right">
                <h2>Need an account?</h2>
                <br></br>
                <br></br>
                <center><a href="../registration/RegistrationPage.php">PLEASE REGISTER HERE</a></center>
                <center><a href="../../../index.php">BACK TO HOME PAGE?</a></center>

            </div>

        </div>

    </div>

</div>
<footer>
    <center>Copyright Fresh Apples 2021</center>
</footer>
</body>
</html>
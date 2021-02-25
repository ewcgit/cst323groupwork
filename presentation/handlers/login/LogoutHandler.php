<?php
include_once "../../../header.php";
require_once "../../../Autoloader.php";

    session_destroy();
    header("location:../../../index.php");

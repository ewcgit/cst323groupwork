<?php
include_once "../../../header.php";
require_once "../../../Autoloader.php";

$movieId = $_POST['movieId'];
$service = new MovieBusinessService();
$service->deleteMovie($movieId);
include "../../views/movies/Movies.php";
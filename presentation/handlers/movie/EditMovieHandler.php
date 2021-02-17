<?php
include_once "../../../header.php";
require_once "../../../Autoloader.php";

$movieId = $_POST['movieId'];
$title = $_POST['title'];
$director = $_POST['director'];
$rating = $_POST['rating'];
$yearMade = $_POST['yearMade'];
$genre = $_POST['genre'];
$service = new MovieBusinessService();

$service->updateMovie($movieId, $title, $director, $rating, $yearMade, $genre);
include "../../views/movies/Movies.php";


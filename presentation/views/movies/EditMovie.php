<?php
include_once "../../../header.php";
require_once "../../../Autoloader.php";

$movieID = $_POST['movieId'];
$service = new MovieBusinessService();

$movie = $service->getMovieByID($movieID);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .inputForm {
            width: 500px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }



    </style>
    <meta charset="UTF-8">
    <title>Edit Movie</title>
</head>
<body>
<h1>Edit Movie</h1>
<form class="inputForm" action="../../handlers/movie/EditMovieHandler.php" method="post">
    <div class="form-group">
        <input type="hidden" class="form-control" id="movieId" name="movieId" value="<?php echo $movie->getId() ?>" >
    </div>
    <div class="form-group">
        <label for="title">Movie Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $movie->getTitle() ?>" >
    </div>
    <div class="form-group">
        <label for="director">Director</label>
        <input type="text" class="form-control" id="director" name="director"value="<?php echo $movie->getDirector() ?>">
    </div>
    <div class="form-group">
        <label for="rating">Rating</label>
        <select class="form-control", id="exampleFormControlSelect1" name="rating">
            <option <?php if($movie->getRating() == "G"){echo "selected='selected'";}?>>G</option>
            <option <?php if($movie->getRating() == "PG"){echo "selected='selected'";}?>>PG</option>
            <option <?php if($movie->getRating() == "PG-13"){echo "selected='selected'";}?>>PG-13</option>
            <option <?php if($movie->getRating() == "R"){echo "selected='selected'";}?>>R</option>
        </select>
    </div>
    <div class="form-group">
        <label for="yearMade">Year Made</label>
        <input type="text" class="form-control" id="yearMade" name="yearMade"value="<?php echo $movie->getYearMade() ?>">
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" class="form-control" id="genre" name="genre"value="<?php echo $movie->getGenre() ?>">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>
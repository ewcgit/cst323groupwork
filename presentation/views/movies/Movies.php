<?php
include_once '../../../header.php';
require_once '../../../Autoloader.php';

$service = new MovieBusinessService();

$movies = $service->getAllMovies();
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>


    <style>
        #movies {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #movies td, #movies th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #movies tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #movies tr:hover {
            background-color: #ddd;
        }

        #movies th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<h1>Movies</h1>
<table id="movies" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th></th>
        <th></th>
        <th></th>
        <th>Movie Title</th>
        <th>Director</th>
        <th>Rating</th>
        <th>Year Made</th>
        <th>Genre</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i = 0; $i < count($movies); $i++) {
        $movieId = $movies[$i]['MOVIE_ID'];
        echo "<tr>";
        echo "<td>" . $movies[$i]['MOVIE_ID']."</td>";
        echo "<td>".
             "<img src='https://picsum.photos/200'".
             "</td>";
        echo "<td>".
            "<form action='EditMovie.php' method='post'>" .
            "<input type='submit' name='Edit' id='Edit' value='Edit'>".
            "<input type='hidden' name='movieId' id='movieId' value='$movieId'>".
            "</form>".
            "</td>";
        echo "<td>".
            "<form action='../../handlers/movie/DeleteMovieHandler.php' method='post'>" .
            "<input type='submit' name='Delete' id='Delete' value='Delete'>".
            "<input type='hidden' name='movieId' id='movieId' value='$movieId'>".
            "</form>".
            "</td>";
        echo "<td>" . $movies[$i]['TITLE'] . "</td>";
        echo "<td>" . $movies[$i]['DIRECTOR'] . "</td>";
        echo "<td>". $movies[$i]['RATING'] . "</td>";
        echo "<td>". $movies[$i]['YEAR_MADE'] . "</td>";
        echo "<td>". $movies[$i]['GENRE'] . "</td>";
        echo "</tr>";
    }
    ?>

    </tbody>
    <script>
        $(document).ready(function () {
            $('#movies').DataTable();
        });
    </script>
</body>
</html>
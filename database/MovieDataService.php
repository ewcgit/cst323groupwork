<?php


class MovieDataService
{

    public function getAllMovies(){
        $db = new Database();
        $conn = $db->getConnection();
        $query = "Select * from movies";
        $results = $conn->query($query);

        if ($results->num_rows ==0){
            return null;
        }else{
            $allMovies = array();
            while($movie = $results->fetch_assoc()){
                array_push($allMovies, $movie);
            }
            return $allMovies;
        }
    }

    public function getMovieByID($id){
        $db = new Database();
        $conn = $db->getConnection();
        $query = "Select * from movies where MOVIE_ID = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $results = $stmt->get_result();

        if($results->num_rows == 0){
            return null;
        }else{
            $movies = array();
            while ($movie = $results->fetch_assoc()){
                array_push($movies, $movie);
            }
            $m = new Movie($movies[0]['MOVIE_ID'], $movies[0]['TITLE'],$movies[0]['DIRECTOR'],$movies[0]['RATING'],
                $movies[0]['YEAR_MADE'],$movies[0]['GENRE']);
            return $m;
        }
    }

    public function updateMovie($id, $t, $d, $r, $y, $g){
        $db = new Database();
        $conn = $db->getConnection();
        $query = "Update movies set TITLE = ?, DIRECTOR = ?, RATING = ?, YEAR_MADE = ?, GENRE = ? Where MOVIE_ID = ? ";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssss", $t, $d, $r, $y, $g, $id);
        if($stmt->execute()){
            $conn->close();
            return true;
        }else{
            $conn->close();
            echo "Error".$query."<br>".mysqli_error($conn);
            return false;
        }
    }

    public function deleteMovie($id){
        $db = new Database();
        $conn = $db->getConnection();
        $query = "DELETE from movies where MOVIE_ID = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $id);
        if($stmt->execute()){
            $conn->close();
            return true;
        }else{
            $conn->close();
            echo "Error".$query."<br>".mysqli_error($conn);
            return false;
        }
    }

}
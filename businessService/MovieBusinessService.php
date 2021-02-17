<?php


class MovieBusinessService
{

    public function getAllMovies(){
        $service = new MovieDataService();
        return $service->getAllMovies();
    }

    public function getMovieByID($id){
        $service = new MovieDataService();
        return $service->getMovieByID($id);
    }

    public function updateMovie($id, $t, $d, $r, $y, $g){
        $service = new MovieDataService();
        $service->updateMovie($id, $t, $d, $r, $y, $g);
    }

    public function deleteMovie($id){
        $service = new MovieDataService();
        $service->deleteMovie($id);
    }
}
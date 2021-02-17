<?php


class Movie
{
    private $id;
    private $title;
    private $director;
    private $rating;
    private $yearMade;
    private $genre;

    /**
     * Movie constructor.
     * @param $id
     * @param $title
     * @param $director
     * @param $rating
     * @param $yearMade
     * @param $genre
     */
    public function __construct($id, $title, $director, $rating, $yearMade, $genre)
    {
        $this->id = $id;
        $this->title = $title;
        $this->director = $director;
        $this->rating = $rating;
        $this->yearMade = $yearMade;
        $this->genre = $genre;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param mixed $director
     */
    public function setDirector($director)
    {
        $this->director = $director;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getYearMade()
    {
        return $this->yearMade;
    }

    /**
     * @param mixed $yearMade
     */
    public function setYearMade($yearMade)
    {
        $this->yearMade = $yearMade;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }


}
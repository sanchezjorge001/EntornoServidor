<?php


    class Rating {

        private $id;
        private $movie_id;
        private $user_id;
        private $rating;

        function __construct($id, $movie_id, $user_id, $rating) {
            $this->id = $id;
            $this->movie_id = $movie_id;
            $this->user_id = $user_id;
            $this->rating = $rating;
        }

        function setId($id) {
            $this->id = $id;
        }

        function getId() {
            return $this->id;
        }
        
        function getMovie_id(){
            return $this->movie_id;
        }

        function getUser_id(){
            return $this->user_id;
        }


        function setRating($rating) {
            $this->rating = $rating;
        }

        function getRating() {
            return $this->rating;
        }

        function __tostring() {
            return "<p>Hola</p>";
        }
    }
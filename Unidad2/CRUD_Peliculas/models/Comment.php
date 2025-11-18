<?php

    class Comment{
        private $id;
        private $movie_id;
        private $user_id;
        private $comentario;

        function __construct($id, $movie_id, $user_id, $comentario) {
            $this->id = $id;
            $this->comentario = $comentario;
            $this->movie_id = $movie_id;
            $this->user_id = $user_id;
        }

        function setId($id) {
            $this->id = $id;
        }

        function getId() {
            return $this->id;
        }

        function getComentario(){
            return $this->comentario;
        }

        function getUser_id(){
            return $this->user_id;
        }

        function setComentario($comentario) {
            $this->comentario = $comentario;
        }

        function getComentario() {
            return $this->comentario;
        }

        function __tostring() {
            return "<p>Hola</p>";
        }       

    }
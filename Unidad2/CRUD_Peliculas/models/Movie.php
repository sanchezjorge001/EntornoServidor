<?php

class Movie{
    private $id;
    private $titulo;
    private $sinopsis;
    private $genero;
    private $año;

    public function __construct($id, $titulo, $sinopsis, $genero, $año) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->sinopsis = $sinopsis;
        this->genero = $genero;
        this->año = $año;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setSinopsis($sinopsis){
        $this->sinopsis = $sinopsis;
    }

    public function getSinopsis(){
        return $this->sinopsis;
    }

    public function setGenero($genero){
        $this->genero = $genero;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setAño($año){
        $this->año = $año;
    }

    public function getAño(){
        return $this->año;
    }

    public function __tostring(){
        return "<p>Hola</p>";
    
    }
}
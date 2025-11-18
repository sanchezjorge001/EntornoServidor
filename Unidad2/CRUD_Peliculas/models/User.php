<?php

class User{
    private $id;
    private $nombre;
    private $contraseña;
    private $rol;

    public function __construct($id, $nombre, $precio, $rol) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->contraseña = $contraseña;
        this->rol = $rol;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setPrecio($precio){
        $this->precio = $contraseña;
    }

    public function getPrecio(){
        return $this->contraseña;
    }

    public function setRol($rol){
        $this->rol = $rol;
    }

    public function getRol(){
        return $this->rol;
    }

    public function __tostring(){
        return "<p>Hola</p>";
    
    }
}
<?php

class Producto{
    private $id;
    private $nombre;
    private $descripcion;
    private $precio;

    public function __construct($id, $nombre, $descripcion, $precio) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
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

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function __tostring(){
        return "<a href='detalle_producto.php?id=$this->id'>$this->nombre</a>: $this->precio € | $this->descripcion";
    }
}
<?php

require_once "Conector.php";
require_once "Producto.php";

class ProductoModel
{
    private $miConector;

    public function __construct()
    {
        $this->miConector = new Conector();
    }

    private function filaAProducto($fila)
    {

        // TO-DO: si la fila está vacía, la función debe devolver null
        $id = $fila["ID"];
        $nombre = $fila["NOMBRE"];
        $descripcion = $fila["DESCRIPCION"];
        $precio = $fila["PRECIO"];

        $producto = new Producto($id, $nombre,$descripcion, $precio);

        return $producto;
    }

    public function obtenerProductoPorId($id)
    {

        try {
            $conexion = $this->miConector->conectar();

            $consulta = $conexion->prepare("SELECT * FROM PRODUCTO WHERE id = :id");
            $consulta->bindParam(':id', $id);
            $consulta->execute();

            $resultadoConsulta = $consulta->fetch();

            $producto = $this->filaAProducto($resultadoConsulta);
        } catch (PDOException $excepcion) {
            $producto = null;
        }

        return $producto;
    }

    public function obtenerTodosProductos()
    {

        $conexion = $this->miConector->conectar();

        $consulta = $conexion->prepare("SELECT * FROM PRODUCTO");
        $consulta->execute();

        $resultadoConsulta = $consulta->fetchAll();

        $productos = [];

        foreach ($resultadoConsulta as $fila) {
            $productos[] = $this->filaAProducto($fila); //Push de producto
        }

        return $productos;
    }
}
<?php

require_once "Puerta.php";

class Vehiculo{
    private $numeroDePuertas;
    private $puertas;
    private $tipoMotor; 
    private $potencia;
    private $etiquetaMedioambiental;
    private $arrancado;

    public function __construct($numeroDePuertas = 4, 
                                $tipoMotor = "Gasolina", 
                                $potencia = "100CV", 
                                $etiquetaMedioambiental = null) {

        $this->numeroDePuertas = $numeroDePuertas;

        $this->puertas = array_fill(0, $numeroDePuertas, new Puerta);

        $this->tipoMotor = $tipoMotor;
        $this->potencia = $potencia;
        $this->etiquetaMedioambiental = $etiquetaMedioambiental;
        $this->arrancado = false;
    }

    public function encenderApagar(){
        $this->arrancado = !$this->arrancado;
    }

    public function cerrarVehiculo(){
        foreach ($this->puertas as $puerta) {
            $puerta->abrirCerrar();
        }

        
    }

    public function puedeEntrarZBE(){
        return ($etiquetaMedioambiental == null ? false : true); 
    }

    public function __toString(){
        
    }
}

$prueba = new Vehiculo;

print_r($prueba);
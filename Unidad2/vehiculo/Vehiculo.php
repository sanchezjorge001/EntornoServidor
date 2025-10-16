<?php

    class Vehiculo{
        public $numeroDePuertas;
        public array $puertas;
        public $tipoMotor;
        public $potencia;
        public $etiquetaMedioambiental;
        public $arrancado;


        public function __construct($numeroDePuertas, $tipoMotor, $potencia, $etiquetaMedioambiental, $arrancado=false){
            $this->numeroDePuertas = $numeroDePuertas;
            $this->tipoMotor = $tipoMotor;
            $this->potencia = $potencia;
            $this->etiquetaMedioambiental = $etiquetaMedioambiental;
            $this->arrancado = $arrancado;
        }
        
        public function encenderApagar(){
            $this->arrancado = !$this->arrancado;
        }

        public function cerrarVeiculo(){
            foreach($this->puerta as $puerta){
                $this->puerta->abrirCerrar($puerta);

        }

        public function puedeEntrarZBE(){
            if($this->etiquetaMedioambiental == "A"){
                echo "No puede entrar a la zona de baja emisiones";
            } else {
                echo "Si puede entrar a la zona de bajas emisiones"
            }
        }

        public function __toString(){
            $estado = $this->ararncado ? "arrancado" : "apagado";
            return "Numero de puertas: $this->numeroDePuertas <br> Tipo de motor: $this->tipoMotor <br> Potencia: $this->potencia <br> Etiqueta MedioAmbiental: $this->etiquetaMedioambiental <br> Estado del vehiculo: $estado ";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculo</title>
</head>
<body>
    <?php
        $v1 = new Vehiculo("");


    ?>
</body>
</html>
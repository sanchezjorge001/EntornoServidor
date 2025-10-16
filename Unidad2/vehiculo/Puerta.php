<?php

    class Puerta{

        public $abierta;
        public Ventana $ventana;


        public function __construct($abierta=true, $ventana) {
            $this->abierta = $abierta;
            $this->ventana = new Ventana;
        }

        public function abrirCerrar(){
            $this->abierta = !$this->abierta;
            $this->ventana->abrirCerrar();
        }



        public function __toString(){
            $estado = $this->abierta ? "abierta" : "cerrada";
            $estadoVentana = $this->ventana ? "abierta": "cerrada";
            return "La puerta esta $estado y la ventana esta $estadoVentana";
        } 

    

    }
<?php

    class Ventana{
        public $abierta;

        public function __construct($abierta=true) {
            $this->abierta = $abierta;
        }

        public function abrirCerrar(){
            $this->abierta = !$this->abierta;

        }

        public function __toString(){
            $estado = $this->abierta ? "abierta" : "cerrada";
            return "La ventana esta $estado";
        }

        public function setAbierta($abierta){
            $this->abierta = true;
        }

        public function getAbierta(){
            return $this->abierta;
        }
    }
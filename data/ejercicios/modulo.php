<?php

    class Modulo extends Asignatura{
        private $codigo = null;

        public function __construct($nombre, $numcreditos, $codigo)
        {
            parent::__construct($nombre, $numcreditos);
            $this->codigo = $codigo;
        }

        function getCodigo(){
            return $this->codigo;
        }

        function setCodigo($nuevocod){
            $this->codigo = $nuevocod;
        }

        public function __toString()
        {
            return "<br> <b> Datos del modulo:</b><br>" 
            . "<br>Nombre asignatua: " . $this->getNombre()
            . "<br>Numero de creditos: " . $this->getNumcreditos()
            . "<br>Numero del codigo: " . $this->codigo;
        }
    }
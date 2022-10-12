<?php
/*
CONCEPTOS:
    - sobreescritura (metodos)
      -> mismo nombre con mismo numero de parametros, diferente comportamientos.
        -> Clase fiagura -> metodo calcular_area
        -> Clase circulo -> metodo calcular_area
        -> Clase cuadrado -> metodo calcular_area
    - sobrecarga (metosos)
      -> mismo nombre con diferente numero de parametros.
    - Sobrecarga (constructores)
      - diferentes constructores con el mismo nombre con dif parametros.
    - Polimorfismo: objeto que se comporta como otro.
        - casting
        - sobreescritura.
        - sobrecarga.
        - ligadura dinamica.
PHP:
    - Si sobreescritura.
    - No existe sobrecarga.
    - No hay sobrecarga constructores.
    - Si hay polimorfismo(sobreescritura).
    - pulbic, private, protected . por defecto public.
NOTACION:
    - Nombre clases: UpperCamelClase(PascalClase)
    - Nombre metodos: LowerCamelClase
    - Java: this.attr
    - PHP : $this->attr
*/

class Asignatura{
    private $nombre = null;
    private $numcreditos = null;
    private static $ciclo = null;

    public function __construct($nombre, $numcreditos){
        $this->nombre = $nombre;
        $this->numcreditos = $numcreditos;
    }

    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function getNumcreditos(){
        return $this->numcreditos;
    }
    function setNumcretditos($numcreditos){
        $this->nombre = $numcreditos;
    }
    static function getCiclo(){
        return self::$ciclo;
    }
    static function setCliclo($ciclo){
        self::$ciclo = $ciclo;
    }


    function __toString()
    {
        return "<br> <b> Datos de la asignatura:</b><br>" 
        . "<br>Nombre asignatua: " . $this->nombre
        . "<br>Numero de creditos: " . $this->numcreditos;
    }
}



    
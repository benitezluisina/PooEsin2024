<?php
class Persona{
    //atributos
    public $nombre;
    public $apellido;
    public $edad;

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function getEdad(){
        return $this->edad;
    }

    public function mostrarDatos(){
        echo "Mi nombre es ".$this->nombre." ".$this->apellido." tengo ".$this->edad." años de edad ";
    }


}
?>
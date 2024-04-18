<?php
require "Persona.php";
class Docente extends Persona{
    public $salario;

    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function getSalario(){
        return $this->salario;
    }

    public function datosDocente(){
        $this->mostrarDatos();
        echo $this->salario;
    }

}
?>
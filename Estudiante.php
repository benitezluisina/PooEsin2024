<?php
require_once ("Persona.php");
class Estudiante extends Persona {

    public $matricula;
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    public function getMatricula(){
        return $this->matricula;
    }

    public function datosAlumno(){
        $this->mostrarDatos();
        echo $this->matricula;
    }
}
?>
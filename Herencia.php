<?php
require "Docente.php";

$objetoDocente = new Docente();
$objetoDocente->setNombre("Luisina");
$objetoDocente->setApellido("Benitez") ;
$objetoDocente->setEdad(35);
$objetoDocente->mostrarDatos();
$objetoDocente->setSalario("50.000") ;
echo "mi salario es: ".$objetoDocente->getSalario();
?>
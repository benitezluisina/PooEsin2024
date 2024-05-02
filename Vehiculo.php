<?php
abstract class Vehiculo{
    public $potencia;
    public $peso;

    function __construct($potencia, $peso){
        $this->potencia = $potencia;
        $this->peso = $peso;

        return true;
    }

    function relacionPesoPotencia(){
        if($this->potencia > 0){
            return ($this->peso/$this->potencia);
        }
        return -1;
    }

    abstract function AceleracionAproximada();
}
//Clase moto
class Moto extends Vehiculo{
    function __construct($potencia, $peso){
        $this->potencia = $potencia;
        $this->peso = $peso;
        return true;
    }

    //Calcula el tiempo en alcanzar los 100km/h
    function AceleracionAproximada()
    {
        $coeficienteTransmision = 3.0;

        $t = $this->peso * 771.73 / (2.0 * $this->potencia * 735);
        $t = $t * $coeficienteTransmision;
        return $t;
    }
}

//Clase coche
class Coche extends Vehiculo{
    function __construct($potencia, $peso){
        $this->potencia = $potencia;
        $this->peso = $peso;
        return true;
    }

    function AceleracionAproximada(){
        $coeficienteTransmision = 2.2;

        if($this->potencia==0){
            return -1;
        }

        $t = $this->peso * 771.73 / (2 * $this->potencia * 735);
        $t = $t * $coeficienteTransmision;

        return $t;
    }
}

//implementacion de un coche 125 cv, 1300kg
$coche = new Coche(125, 1300);
echo "coche (0-100): ".$coche->AceleracionAproximada();
echo "<br>";

//implementacion de una moto 60cv 250kg
$moto = new Moto(60, 250);
echo "moto (0-100): ".$moto->AceleracionAproximada();
echo "<br>";

?>
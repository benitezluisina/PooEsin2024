<?php
class Auto{

    public $marca;//puedo acceder a ella desde cualquier parte del proyecto
    protected $precio;//solamente puedo acceder desde la clase que lo conteniene.

    public function __construct($marca, $precio){
        $this->marca = $marca;
        $this->precio = $precio;
    }
}
$auto = new Auto("BMW", "USD 100.000");

var_dump($auto->marca);

var_dump($auto->precio);



?>
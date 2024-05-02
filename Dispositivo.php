<?php
   class Dispositivos {
      //definimos los atributos;
      private $tipo;
      private $marca;
      private $sistema_operativo;
      //definimos los métodos;
      public function ver_tipo(){
         return $this->tipo;
      }
      public function modificar_tipo($valor){
         $this->tipo = $valor;
      }
      public function ver_marca(){
         return $this->marca;
      }
      public function modificar_marca($valor){
         $this->marca = $valor;
      }
      public function ver_sistemaOperativo(){
         return $this->sistema_operativo;
      }
      public function modificar_sistemaOperativo($valor){
         $this->sistema_operativo = $valor;
      }
      public function recomendacion(){
         if ($this->marca == "Huawei") {
            echo "Esta marca está considerada actualmente";
         }else {
            echo "Esta marca está en revisión. Vuelva más tarde";
         }
      }
   }
?>
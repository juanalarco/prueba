<?php 

/**
 * 
 * Definicion de clase
 */
class Animal
{
  // Declaración de una propiedad
  public $tipo = 'Perro';
  public $patas = '4';

  // Declaración de un método
  public function tipo() {
      echo '<br>';
      echo 'El tipo de animal es un :';
      echo $this->tipo;
      echo '<br>';
  }
  //Setter
  public function setTipo($cambiarTipo){
    $this->color=$cambiarColor;
  }
  public function setPatas($cambiarpatas){
    $this->tipo=$cambiarTipo;
  }

  //Getters
  public function getTipo(){
    echo $this->tipo;
  }
  public function getPatas() {
    echo  $this->patas;
  }

}
?>


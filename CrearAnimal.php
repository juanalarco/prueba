<!DOCTYPE html>
<html>
<head>
	<title> Animales </title>
</head>
<body>

<?php
    //incluimos la Clase
    include "animal.php";
    $animal2 = 'araña'
    $animal = 'cienpies';

    //Generacion de objetos
    $animal = new Animal();
    $animal->setTipo('Perro ');
    echo "es el color del ordenador" .$animal->getTipo();
    echo "<br>";
    $animal->setPatas('4 ');
    echo "numero de patas" .$animal1->getPatas();
  
</body>
</html>


 ?>
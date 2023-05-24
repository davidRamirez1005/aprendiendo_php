<?php 

include "pooAuto.php";
$a1 = new Auto();
$a1 -> setPlaca("asd-123");
$a1 -> setColor("rojo");
$a1 -> setModelo("Mazda");
var_dump($a1);
echo "<br>";echo "<br>";echo "<br>";
print "datos el auto";
echo "<br>";echo "<br>";
echo "placa: ".$a1->getPlaca()."<br>";
echo "Color: ".$a1->getColor()."<br>";
echo "Modelo: ".$a1->getModelo()."<br>";

?>

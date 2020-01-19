<?php

$frutas = array("laranja","abacaxi","melancia");
print_r($frutas);
echo "<br>";

$carros[0][0] = "GM";
$carros[0][1] = "Corsa";
$carros[0][2] = "Camaro";

$carros[1][0] = "Ford";
$carros[2][1] = "Focus";
$carros[1][2] = "Mustang";

echo $carros[0][1]."<br>";
echo end($carros[0])."<br>";
echo end($carros[1])."<br>";


?>
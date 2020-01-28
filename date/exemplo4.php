<?php

$dt = new DateTime();
$periodo = new DateInterval("P15D"); // date interval armazena um periodo de tempo
// podemos fazer várias coisas com esse período e a classe date time

echo $dt->format("d/m/Y")."<br>";
$dt->add($periodo);
echo $dt->format("d/m/Y"); // o método format funciona como o date

?>
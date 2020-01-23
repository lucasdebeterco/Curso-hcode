<?php

function soma(int ...$valores) : string {
    $soma = array_sum($valores);
    return $soma;
}
echo soma(2,"7");
echo "<br>";
echo soma(2,5);
echo "<br>";
echo soma(2,2.9);
echo "<br>";

?>
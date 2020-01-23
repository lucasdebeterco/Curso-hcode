<?php

$a = 10;
function soma(&$valor){ // usamos o & para passar a variável por referência
    $valor += 2;
    return $valor;
}
echo soma($a);
echo "<br>";
echo $a; // valor também foi alterado

?>
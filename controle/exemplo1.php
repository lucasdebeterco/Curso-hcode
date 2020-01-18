<?php

$num = 10;

if ($num>0){
    echo "Positivo";
} else if ($num < 0){
    echo "Negativo";
} else{
    echo "0";
}

echo "<br>";
// Operador ternário
echo ($num > 0)?"Positivo":"Negativo ou 0";

?>
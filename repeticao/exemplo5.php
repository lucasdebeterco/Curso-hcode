<?php

$condicao = true;

while($condicao){
    $num = rand(0,30);
    echo $num."<br>";
    if ($num == 15){
        $condicao = false;
    }
}

?>
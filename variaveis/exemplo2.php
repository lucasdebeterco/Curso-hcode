<?php

// tipos básicos 
$nome = "Lucas";
$ano = 2000;
$salario = 5500.99;
$bloqueado = false;

// tipos compostos
$frutas = array("Abacaxi", "Laranja", "Manga");
echo $frutas[2]."<br>";

$nascimento = new DateTime();
var_dump($nascimento);
echo "<br>";

// tipos especiais
$arquivo = fopen("exemplo2.php","r");
var_dump($arquivo);
$nulo = NULL;

?>
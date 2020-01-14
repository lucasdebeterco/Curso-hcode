<?php

$frase = "A repetição é mãe da retenção.";
$qntCaracteres = strlen($frase);
$query = strpos($frase, "mãe"); 
// Parâmetros
// Variável em que queremos procurar seguida da string que quermos procurar
var_dump($query); // Retornou 17 (localização de "mãe")

$texto = substr($frase, 0, $query);
// string que queremos cortar, de que posição, até que posição (valores int) 
echo "<br>";
var_dump($texto);

?>
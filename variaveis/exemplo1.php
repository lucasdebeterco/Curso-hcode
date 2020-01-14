<?php

$nome = "Lucas";
$sobrenome = "Debeterco";
$nomeCompleto = $nome." ".$sobrenome;

echo @$nome."<br>";
var_dump($nome);
echo "<br>".$nomeCompleto;


unset($nome);

if (isset($nome)){
     echo $nome;
}


?>
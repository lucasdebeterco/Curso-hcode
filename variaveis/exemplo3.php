<?php

// Existem variáveis pré definidas conhecidas como arrays super-globais
// post get server
$nome = $_GET["nome"];
$idade = (int) $_GET["idade"];
var_dump($nome);
echo "<br>";
var_dump($idade);
echo "<br>";

$ip = $_SERVER['REMOTE_ADDR'];
echo $ip;

?>
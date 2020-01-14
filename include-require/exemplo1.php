<?php

// include "inc/soma.php";
require_once "inc/soma.php";
require_once "inc/soma.php"; // seguunda chamda ignorada por causa do _once
$resultado = soma(100,23);
var_dump($resultado);


/* O require obriga que o arquivo exista e seja esteja funcionando,
caso não estiver, ele gera uma exeção que pode ser tratada com try catch 

O include tenta funcionar mesmo que o aruivo não exista, ele busca em 
um repositório configurável (include path) no php.ini separado (interssante 
em projetos internos)

o _once serve para não chamar dois arquivos duas vezes, pois isso dá erro,
já que vão existir funções com o mesmo nome.


*/
?>
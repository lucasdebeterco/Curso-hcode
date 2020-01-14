<?php

$nome = "Lucas";

function teste(){
    GLOBAL $nome;
    echo $nome;
}

function teste2(){
    $nome = "João";
    echo $nome."teste 2";
}

teste();

// Quando definimos uma variável como global podemos
// acessá-la mesmo fora do escopo da função.

?>
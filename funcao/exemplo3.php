<?php

function ola($nome, $periodo = "Bom dia"){
    return "Olá $nome, $periodo <br>";
}
// Parâmetros que não possuem valor padrão devem ficar na esquerda
// 

echo ola("Lucas");
echo ola("Lucas2", "Boa tarde");

?>
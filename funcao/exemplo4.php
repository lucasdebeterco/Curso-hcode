<?php

function ola(){
    $numArgs = func_num_args(); // Números de argumentos recebidos
    $args = func_get_args(); // Array de argumentos recebidos
    $arg = func_get_arg(0); // Argumento específico recebido
    return $args;
}

var_dump(ola("Oi",13));
?>
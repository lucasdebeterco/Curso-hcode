<?php

function teste($funcaoRecebida){
    $funcaoRecebida(); // chamando a função que escreve terminou 
}

teste(function(){
    echo "Terminou";
}); // passando uma função anônima (sem nome) por parâmetro

?>
<?php
$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Lucas',
    'idade'=>19
));

array_push($pessoas, array(
    'nome'=>'Fulano',
    'idade'=>20
));

print_r($pessoas[0]["nome"]);

?>
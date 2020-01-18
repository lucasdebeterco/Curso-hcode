<?php

$total = 100;
$desc = 0.9;

do {
    $total *= $desc;
} while ($total > 9999);

// o do-while executa o que tem no 'do' independente da condição

echo $total;

?>
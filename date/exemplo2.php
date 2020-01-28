<?php

$ts = strtotime("2000-12-14"); // retorna o timestamp da data digitada
$ts2 = strtotime("now"); // agora
$ts3 = strtotime("+1 week"); // agora mais uma semana


echo date("l, d/m/Y",$ts)."<br>";
echo date("l, d/m/Y",$ts2)."<br>";
echo date("l, d/m/Y",$ts3)."<br>";
?>
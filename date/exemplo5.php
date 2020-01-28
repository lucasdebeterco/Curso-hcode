<?php

$date = new DateTime("2000-12-14");
$date2 = new DateTime("2000-12-15");
$dif = $date->diff($date2);
var_dump($dif); // isso gerou um dateInterval

?>
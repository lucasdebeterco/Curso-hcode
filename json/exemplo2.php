<?php

$json = '[{"nome":"Lucas","idade":19},{"nome":"Fulano","idade":20}]';

$data = json_decode($json,true);

var_dump($data);

?>
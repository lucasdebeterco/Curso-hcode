<?php

require_once("config.php");
echo session_id();
echo "<br>";
var_dump($_SESSION);
echo "<br>";
echo session_save_path();
echo "<br>";
echo session_status();
?>
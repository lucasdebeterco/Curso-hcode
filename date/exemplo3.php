<?php

setlocale(LC_ALL, "pt_BR","pt_BR.utf-8", "portuguese");
echo date("l")."<br>";
echo ucwords(strftime("%A %B"));
// a função strftime aceita o setlocale, ou seja, posso escrever as coisas em
// portugues como dias da semana ou meses.

?>
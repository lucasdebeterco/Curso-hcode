<form>

<input type="date" name="nascimento"><br>
<input type="text" name="nome"><br>
<input type="submit">

</form>
<?php 

foreach ($_GET as $key => $value) {
    echo "Chave: ".$key."<br>";
    echo "Valor: ".$value."<br><br>";
}

?>
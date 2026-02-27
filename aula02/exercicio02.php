<?php
$numero = $_POST['numero'];

if ($numero > 0) {
    echo "O $numero é positivo! <br>";
} elseif ($numero < 0) {
    echo "O $numero é negativo! <br>";
} else {
    echo "O número é zero! <br>";
}




//$nome= $_POST['nome'];

//echo "teste, $nome";

?>
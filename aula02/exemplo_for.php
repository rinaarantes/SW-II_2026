<?php 
for ($i=1; $i <= 5; $i++) {
    echo $i;
    echo"<br>"
}
echo "<hr>";

$nomes = ['FULANO', 'CICLANO', 'BELREANO', 'ANDERSON', 'MARIA'];

foreach ($nomes as $indice => $valor) {
    echo $valor . "<br>";
}

//echo $nomes; --> Forma errada 
//$qtde = count($nomes);

//for ($i=1; $i < $qtde; $1++) {
  //  echo $nomes[$i];
 //   echo"<br>"
//}

echo $nomes[0]
echo "<br>";
echo $nomes[1]
echo "<br>";
echo $nomes[2]
echo "<br>";
echo $nomes[3]
echo "<br>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa</title>
</head>
<body>
    
 <?php 
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $idade = $_POST['idade'];
     $ano_atual = date('Y');
     $ano_nasc = $ano_atual - $idade;
 ?>
  <p>Seu Nome é <?php echo $nome; ?></p>
  <p>O Email é <?php echo $email; ?></p>
  <p>Já Idade é <?php echo $idade; ?> </p>
  <p>Seu ano de nascimento é <?php echo $ano_nasc; ?> </p>

  <?php 
   
   if ($idade >= 18) {
    echo "<p style='color:red;'> você é maior de idade</p>";
   }
   else {
    echo "<p style='color:blue;'>você é menor de idade</p>";
   }

 echo "<h1>Lista de Clientes</h1>";
 echo "<ul>";
 //laço de repetição
 for ($i=1; $i <=3 ; $i++) { 
    echo "<li>Cliente $i</li>";
 }
 echo "</ul>";

  ?>
 <!--
 <h1>Lista de Clientes</h1>

<ul>
    <li>Cliente 1</li>
    <li>Cliente 2</li>
    <li>Cliente 3</li>
 </ul> -->

 </body>
</html>
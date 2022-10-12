<?php

  $altura = $_POST['altura'];
  $peso = $_POST['peso'];

  $calc = number_format($peso/(pow($altura, 2)), 1);

  $clas = 'teste';

  if($calc < 19) {
    $clas = 'Baixo Peso';
  } else
  
  if($calc >= 19 && $calc <= 24) {
    $clas = 'Peso Normal';
  } else
  
  if($calc >= 25 && $calc <= 30) {
    $clas = 'Sobrepeso';
  } else
  
  if($calc >= 31 && $calc <= 35) {
    $clas = 'Obesidade I';
  } else
  
  if($calc >= 36 && $calc <= 40) {
    $clas = 'Obesidade II';
  } else {
    $clas = 'Obesidade III';
  }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC Calc</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>O seu IMC é</h1>

    <span><?php echo $calc ?></span>
    
    <h1>De acordo com ele, você possui</h1>
    <span class="clas"><?php echo $clas?></span>

    <div class="btn">
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
<?php

  $altura = $_POST['altura'];
  $peso = $_POST['peso'];

  $calc = $peso/(pow($altura, 2));

  $clas = 'teste';


  switch ($calc) {
    case '$calc >= 19 || $calc <= 24':
      $clas = 'Peso normal';
      break;
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
    
    <h1>De acordo com seu IMC, você possui</h1>
    <span><?php echo $clas?></span>
</body>
</html>
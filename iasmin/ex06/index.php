<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $valor1 = $_GET['v1']??0;
    $valor2 = $_GET['v2']??0;
    ?>
    <main>
        <section id="resultado">
            <h2>Resultado da Soma</h2>
            <?php
            $soma = $valor1 +$valor2;
            echo "<p>A soma entre os valores <strong>$valor1</strong> e <strong>$valor2
            </strong> é igual a <strong>$soma</strong>.</p>"
            ?>
            </section>
        <h1> Somador de Valor</h1> 
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Valor 1</label>
        <input type ="nummber" name ="v1" if="v2" value="<?=$valor1?>">
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?=$valor2?>">
        <input type="submit" value="somar">
    </from>
  </main>
</body>
</html>
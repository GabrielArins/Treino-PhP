<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

 

    <main>
        <h1>Calculadora de salario minimo</h1>

      <form action="<?php echo $_SERVER ['PHP_SELF']?>" method="get">
        
        <label for="valor1">Salario</label>
        <input type="number" name="salario" id="salario" value="<?=$valor1?>">
        <h2>O salario minimo é 1350,00 R$</h2>
        <input type="submit" value="Calcular">
        <label for="Resultado"> <h1>Quantidade de salarios minimos</h1></label>
      </form>
        
     <?php
        
        $salario = $_GET ["salario"];
        $salarioMinimo = intval(1350,00);
        $resultado = $salario / $salarioMinimo ;
        
     
        echo "O seu salario equivale a = " . intval($resultado) . " salarios minimos";
        echo " e ainda sobram " . $salario % $salarioMinimo ;
        

        ?>

        
    </main>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP formulario unico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
     $valor1 = $_GET ['v1'] ?? 0;
     $valor2 = $_GET ['v2'] ?? 0;

    ?>

    <main>
        <h1>Somador de resultados</h1>
        <form>
            <form action="<?php echo $_SERVER ['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>"> 
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
            <h2>resultado</h2>
            <?php 
            echo " <strong> Seu resultado é = " .  $valor1 + $valor2 ;
            
            ?>
    </main>
    
</body>
</html>
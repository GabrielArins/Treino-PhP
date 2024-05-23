<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
    Numeros inteiro e francionado
    </h1>
    <header>
        <main>
            
            <?php 

             $numero = $_GET ["numero"];

             // Obter a parte inteira
             $parteInteira = intval($numero);
             
             // Obter a parte fracionada
             $parteFracionada = fmod($numero,1);
             
             // Formatando a parte fracionada
             $parteFracionadaFormatada = number_format($parteFracionada, 3);
             
             echo "Parte Inteira: $parteInteira\n";
             echo "Parte Fracionada Formatada: $parteFracionadaFormatada\n";
             
             
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </main>
    </header>
    
</body>
</html>
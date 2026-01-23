<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenacao</title>
</head>
<body>
    <?php

    $nome = "Maria";
    $cor = "amarelo";
    $idade = 25;
    $atividade_preferida = "dormir";

    
    echo 'Olá ' .$nome. ', vi que sua cor preferida é ' .$cor. ', estou vendo também que você possui '.$idade. ' anos e gosta de ' .$atividade_preferida;

    echo "<br>";

    echo "Olá $nome vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e gosta de $atividade_preferida"

    
    ?>
</body>
</html>
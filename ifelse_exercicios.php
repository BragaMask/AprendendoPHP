<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else - Exercicio</title>
</head>
<body>
    <h1>If Else - Exercício</h1>
    <br>
    <h2>Doação de Sangue</h2>
    <?php
    
    $idade = 13;
    $peso = 57;

    echo "Olá Usuário sua idade é $idade e seu peso é $peso";

    echo "<br>";

    if($idade >=16 && $idade <= 69 && $peso > 50){
        echo "Atende aos requisitos";
    }else{
        echo "Não atende aos requisitos";
    }
    
     ?>
</body>
</html>
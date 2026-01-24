<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE IF ELSE</title>
</head>
<body>
    <h1>Bem vindo User</h1>

    <?php
    
    $idade = 20;

    echo "sua idade é $idade então";
    echo "<br>";

    if($idade >= 18 && $idade <= 60){
        echo "Você é um adulto";
    }
    else{
        echo "Você não é um adulto";
    }

    echo "<br>"

    
    ?>
    
</body>
</html>
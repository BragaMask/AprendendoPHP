<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <br>
    <?php
    $ArrayFrutas = ["Abacate", "Tomate", "Maracujá", "Limão"];
    
    echo "Lista de Compras"; //Temos duas formas de "printar" os arrays

    echo "<pre>";
    var_dump($ArrayFrutas); 
    echo "</pre>";

    echo "<pre>";
    print_r($ArrayFrutas);
    echo "</pre>";

    echo "<hr>";

    echo "Lista de Coisas"; //array multidimensional

    $ArrayCoisas["Nomes"] = ["Arthur","Guilherme","Heitor","Emanuel"];
    $ArrayCoisas["Comidas"] = ["Pizza", "Iorgute", "Fígado", "Queijo"];

    echo "<pre>";
    print_r($ArrayCoisas);
    echo "</pre>"

    ?>
</body>
</html>
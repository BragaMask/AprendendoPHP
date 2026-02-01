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
    
    echo "Array Padrão";
    echo "<br>";

    echo "Lista de Compras"; //Temos duas formas de "printar" os arrays

    echo "<pre>";
    var_dump($ArrayFrutas); 
    echo "</pre>";

    echo "<pre>";
    print_r($ArrayFrutas);
    echo "</pre>";

    echo "<hr>";
    echo "Array Multidimensional";
    echo "<br>";
    echo "Lista de Coisas"; //array multidimensional

    $ArrayCoisas["Nomes"] = ["Arthur","Guilherme","Heitor","Emanuel"];
    $ArrayCoisas["Comidas"] = ["Pizza", "Iorgute", "Fígado", "Queijo"];

    echo "<pre>";
    print_r($ArrayCoisas);
    echo "</pre>";

    echo "<hr>";
    echo "Array Pesquisa";
    echo "<br>";
    //in_array() -> true ou false para a existência do que está sendo procurado
    //array_search() -> retorna o índice do valor pesquisado, caso ele exista

    $ArrayNumeros = [1,2,3,4,5];

    $existe = in_array(1, $ArrayNumeros);
    //true -> texto = 1 
    //false -> texto = vazio
    
    if($existe == true){
        echo "Sim, ele existe";
    }else{
        echo "Não, ele não existe";
    }

    echo "<br>";
    echo array_search(2, $ArrayNumeros);
    echo " - índice do Array";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função - Exercicio</title>
</head>
<body>
    <h1>Função - Exercicio</h1>
    <br>
    <h2>Calculo de imposto</h2>
    <br>

    <?php
    $salario = 2654.43;

    function CalculoDoImposto($salario){
        if($salario<= 1903.98){
            echo "isento de imposto";
        }
        elseif ($salario >=1903.99 && $salario <= 2826.65){
            $valorImposto = $salario * 0.075 ;
            echo "O valor a ser pago será R$ $valorImposto";
        }
        elseif($salario >=2826.66 && $salario <= 3751.05){
            $valorImposto = $salario * 0.15;
            echo "O valor a ser pago será R$ $valorImposto";
        }
        elseif($salario >=3751.06 && $salario <= 4664.68){
            $valorImposto = $salario * 0.225;
            echo "O valor a ser pago será R$ $valorImposto";
        }
        else{
            $valorImposto = $salario * 0.275;
            echo "O valor a ser pago será R$ $valorImposto";
        }

    }

    CalculoDoImposto($salario);




    ?>
</body>
</html>
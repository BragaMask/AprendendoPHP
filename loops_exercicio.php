<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Exercicio</title>
</head>
<body>
    <h1>Loops Exercício</h1>
    <br>
    <?php
    $numMegaSena = [];

    for ($i=0; $i < 6; $i++) { 

        $numAleatorio = rand(1,60);

        foreach ($numMegaSena as $num) {
            if ($numAleatorio == $num){
                $numAleatorio = rand(1,60);
            }
            else{
                $numMegaSena[$i] = $numAleatorio;
            }
        }

        print_r($numMegaSena);
    }
    ?>
</body>
</html>
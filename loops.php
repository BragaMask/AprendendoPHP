<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
         
         $num = 1;
         //operadores comparação / lógicos
         echo "Ínicio do Loop <br>";
         while($num < 10){
            
            echo "$num <br/>";

            $num++; //critério de parada

            //Podemos adicionar condições como Break, Continue

            /*
            if($num > 100){
            break;
            }
            */ 

            /*
            if($num == 2 || $num == 6){
            continue;
            }
            */ 
         }
         echo "Fim do LOOP <br>";
    ?>
</body>
</html>
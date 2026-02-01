<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
         
         $numW = 1;
         //operadores comparação / lógicos
         echo "Ínicio do Loop <br>";
         while($numW < 10){

            echo "$numW <br/>";

            $numW++; //critério de parada

            //Podemos adicionar condições como Break, Continue

            /*
            if($numW > 100){
            break;
            }
            */ 

            /*
            if($numW == 2 || $numW == 6){
            continue;
            }
            */ 
         }
         echo "Fim do LOOP <br>";

         echo "<hr>";

         $numDW = 1;
         do {
            echo "Entrou no Do While";
         } while ($numDW > 100);


    ?>
</body>
</html>
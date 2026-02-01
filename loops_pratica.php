<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Pratica</title>
</head>
<body>
    <?php
    $registros = [
        ["titulo" => "Notícia 1", "conteudo" => "Conteúdo Notícia 1"],
        ["titulo" => "Notícia 2", "conteudo" => "Conteúdo Notícia 2"],
        ["titulo" => "Notícia 3", "conteudo" => "Conteúdo Notícia 3"],
    ];
    
    $idx = 0;
    while ($idx < 3) {

        echo "<h3>". $registros[$idx]["titulo"]. "</h3>";
        echo "<p>" . $registros[$idx]["conteudo"] . "</p>";

        echo "<hr>";

        $idx++;
    }

    ?>
</body>
</html>
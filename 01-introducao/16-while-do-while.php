<!-- 
    Estudando PHP
    
    Códigos comentados por Marcelo Pereira
    https://github.com/marcelopoars
    https://marcelopoars.github.io/
 -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - While e Do while</title>
</head>
<body>

    <h1>Estudando PHP - While e Do while</h1>

    <?php

    // *******************************
    // Laço de repetição - "while"
    // Enquanto a condição for verdadeira - repete a instrução
    $contador = 1;

    while ($contador <= 5): // Enquanto isso VERDADE, execute o trexo abaixo
        print "Contador vale: $contador <br>";
        $contador++; // contador + 1
    endwhile;

    print "<br><hr><br>";

    //------------------------------------------------


    // Laço de repetição - "Do While"
    // Executa o código e depois faz a verificação
    $contador = 1;

    do {
        // Faça isso enquanto VERDADE
        print "Contador vale: $contador <br>";
        $contador++; // contador + 1
    } while ($contador <= 15);

    print "<br><hr><br>";

    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Operdadores de Incremento e Decremento</title>
</head>
<body>

    <h1>Estudando PHP - Operdadores de Incremento e Decremento</h1>

    <?php

    // *******************************
    // INCREMENTO

    // Pré-incremento = "Incrementa e retorna o valor já alterado"
    $valor = 20;
    print ++$valor; // imprime 21

    print "<br><hr><br>";

    // Pós-incremento = "Retorna o valor e depois incrementa"
    $valor = 20;
    print $valor++; // imprime 20
    print "<br>";
    print $valor; // imprime 21



    print "<br><hr><br>";




    // **********************************
    // DECREMENTO

    // Pré-decremento = "Decrementa e retorna o valor já alterado"
    $valor = 20;
    print --$valor; // imprime 19

    print "<br><hr><br>";

    // Pós-decremento = "Retorna o valor e depois decrementa"
    $valor = 20;
    print $valor--; // imprime 20
    print "<br>";
    print $valor; // imprime 19

    print "<br><hr><br>";
    print "<br><hr><br>";


    ?>

</body>
</html>
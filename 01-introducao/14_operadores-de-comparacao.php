<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Operdadores de Comparação</title>
</head>
<body>

    <h1>Estudando PHP - Operdadores de Comparação</h1>

    <?php

    // *******************************
    // Operdadores de Comparação
    

    $a = 10;
    $b = "10";

    // igual
    var_dump($a == $b); // Retorna "true" - verdadeiro
    print "<br><hr><br>";

    // diferente
    var_dump($a != $b); // Retorna "false" - falso
    print "<br><hr><br>";

    // igual em "tipo" e "valor"
    var_dump($a === $b); // Retorna "false" - falso
    print "<br><hr><br>";

    // diferente em "tipo" e "valor"
    var_dump($a !== $b); // Retorna "true" - verdadeiro
    print "<br><hr><br>";

    // diferente 
    var_dump($a <> $b); // Retorna "false" - falso
    print "<br><hr><br>";

    // maior que 
    var_dump($a > $b); // Retorna "false" - falso
    print "<br><hr><br>";

    // menor que 
    var_dump($a < $b); // Retorna "false" - falso
    print "<br><hr><br>";

    // maior ou igual que 
    var_dump($a >= $b); // Retorna "false" - falso
    print "<br><hr><br>";

    // menor ou igual que 
    var_dump($a <= $b); // Retorna "false" - falso
    print "<br><hr><br>";

    // Spaceship (nave espacial)
    print 1 <=> 1; // 0
    print "<br>";
    print 1 <=> 2; // -1
    print "<br>";
    print 2 <=> 1; // 1


    ?>

</body>
</html>
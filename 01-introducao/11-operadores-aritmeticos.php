<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Operdadores Aritméticos</title>
</head>
<body>

    <h1>Estudando PHP - Operdadores Aritméticos</h1>

    <?php

    // Adição
    print 10 + 2;
    print "<br><hr><br>";

    // Subtração
    print 10 - 2;
    print "<br><hr><br>";

    // Multiplicação
    print 10 * 2;
    print "<br><hr><br>";

    // Subtração
    print 10 / 2;
    print "<br><hr><br>";

    // Módulo - resto da divisão
    print 10 % 2;
    print "<br><hr><br>";

    // Exponenciação
    print 10 ** 2;
    print "<br><hr><br>";
    print "<br><br>";
   
    // *********************
    // Exemplo com variáveis
    // Observando a ordem de precedência de operadores

    $nota1 = 8;
    $nota2 = 7.5;
    $nota3 = 9.5;

    $media = ($nota1 + $nota2 + $nota3) / 3;

    // Aqui utilizamos a função "round($varivel, 2)"
    // Onde definimos "2" como o número de casas decimais 
    print round($media, 2); // Imprime na tela "8.33"



    print "<br><hr><br>";
    print "<br><hr><br>";
    print "<br><hr><br>";
    print "<br><hr><br>";


    ?>

</body>
</html>
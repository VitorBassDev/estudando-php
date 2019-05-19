<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Funções para Números</title>
</head>
<body>

    <h1>Estudando PHP - Funções para Números</h1>

    <?php

    // *******************************
    // Funções para Números

    // Função "number_format()": Possibilita a formatação de valores numéricos
    // Sintaxe:
    // "number_format($valor, casas decimais, "separador decimal", "separador de milhares")"
    $preco = 1499.49;
    $precoFormatado = number_format($preco, 2, ",", ".");

    print "O valor do produto é R$ $precoFormatado";

    print "<br><hr><br>";


    // Função "round()": Arredonda floats
    print round(1.49); // Ardonda para baixo
    print "<br>";
    print round(1.51); // Arredonda para cima
    print "<br>";
    print round(1.5); // Arredonda para cima

    print "<br><hr><br>";


    // Função "ceil()": Arredonda floats - sempre para CIMA
    print ceil(1.01);
    print "<br>";
    print ceil(1.49);

    print "<br><hr><br>";


    // Função "floor()": Arredonda floats - sempre para BAIXO
    print floor(1.99);
    print "<br>";
    print floor(1.59);

    print "<br><hr><br>";


    // Função "rand()": orteia números em uma detrminada faixa
    print rand(1, 50); // Retorna números entre 1 a 50 "aleatóriamente"



    print "<br><hr><br>";
    print "<br><hr><br>";



    ?>

</body>
</html>
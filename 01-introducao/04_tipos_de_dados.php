<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Tipos de dados</title>
</head>
<body>

    <h1>Estudando PHP - Tipos de dados</h1>

    <?php
    /************ ESCALARES ************/

    // string
    $nome = 123;

    // A função "var_dump" mostra mais informações sobre a variável
    var_dump($nome);

    // Verifica se a variável é uma string
    if(is_string($nome)):
        print "É uma string";
    else:
        print "Não é uma string";
    endif;

    print "<hr>";

    // int  - "número inteiros"
    $idade = 30;
    var_dump($idade);

    if(is_int($idade)):
        print "É inteiro";
    else:
        print "Não é um inteiro";
    endif;

    print "<hr>";

    // float
    $taxaImposto = 1.5;
    var_dump($taxaImposto);

    if(is_float($taxaImposto)):
        print "É float";
    else:
        print "Não é um float";
    endif;

    print "<hr>";

    // boolean
    $ligado = false;
    var_dump($ligado);

    if(is_bool($ligado)):
        print "É um boolean";
    else:
        print "Não é um boolean";
    endif;

    ?>


    
</body>
</html>
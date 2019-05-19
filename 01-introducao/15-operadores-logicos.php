<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Operdadores Lógicos</title>
</head>
<body>

    <h1>Estudando PHP - Operdadores Lógicos</h1>

    <?php

    // *******************************
    // Operdadores Lógicos
    // && - and: verdadeiro se (os 2 forem vedadeiro)
    // || - or: verdadeiro (se pelo menos um for vedadeiro)
    // xor: ou um, ou outro (apenas um pode ser verdadeiro)
    // (!): negação

    $a = 20;
    $b = 20;
    $c = 22;

    // (&& - and) - e
    var_dump(( $a == $b) and ( $b == $c ));
    print "<br><hr><br>";

    // (|| - or) - ou
    var_dump(( $a == $b) or ( $b == $c ));
    print "<br><hr><br>";

    // (xor) - "ou um, ou outro" (apenas um pode ser verdadeiro)
    var_dump(( $a == $b) xor ( $b == $c ));
    print "<br><hr><br>";

    // ( ! ) - Nega o resultado da expressão
    var_dump( !( $a == $b ) );
    print "<br><hr><br>";


    print "<br><hr><br>";
    print "<br><hr><br>";

    ?>

</body>
</html>
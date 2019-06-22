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

    // Operador Lógico E (&& - and)
    // Retorna VERDADEIRO se as duas expressões forem VERDADE
    var_dump(( $a == $b) and ( $b == $c ));
    print "<br><hr><br>";

    // Operador Lógico OU (|| - or)
    // Retorna VERDADEIRO se uma pelo menos uma das expressões forem VERDADE
    var_dump(( $a == $b) or ( $b == $c ));
    print "<br><hr><br>";

    // Operador Lógico OU EXCLUSIVO (xor)
    // Retorna VERDADEIRO aenas se uma das expressões forem VERDADE
    var_dump(( $a == $b) xor ( $b == $c ));
    print "<br><hr><br>";

    // Operador Lógico NOT ( ! ) - Nega o resultado da expressão
    var_dump( !( $a == $b ) );
    print "<br><hr><br>";


    print "<br><hr><br>";
    print "<br><hr><br>";

    ?>

</body>
</html>
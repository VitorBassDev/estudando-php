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
    <title>Estudando PHP - Variáveis Superglobais</title>
</head>
<body>

    <h1>Estudando PHP - Variáveis Superglobais</h1>

    <?php

    // *******************************
    // Variáveis Superglobais

    /*
        Vriáveis do PHP que estão sempre disponíveis
        independente do escopo

        Armazenam variáveis um array
    */


    // Variável "$GLOBALS" - acessar variáveis de qualquer lugar do script php
    $a = 2;
    $b = 10;

    function soma() {
        // Acesando variáveis fora do escopo da função
        print $GLOBALS['a'] + $GLOBALS['b'];
    }

    soma();

    print "<br><hr><br>";


    /* 
        A variável "$_SERVER" contém informações sbre cabeçalhos, caminhos
        e locais de scripts. É um array com vários índices. 
        Vale a pena consultar o manual PHP conforme sua necessidade
    */

    // Retorna o NOME do script php que está sendo executado
    print $_SERVER['PHP_SELF'];
    print "<br><hr><br>";

    // Retorna o nome do host / servidor
    print $_SERVER['SERVER_NAME'];
    print "<br><hr><br>";
    
    // Retorna o caminho absoluto do script em execussão
    print $_SERVER['SCRIPT_FILENAME'];
    print "<br><hr><br>";

    print $_SERVER['DOCUMENT_ROOT'];
    print "<br><hr><br>";

    print $_SERVER['SERVER_PORT'];
    print "<br><hr><br>";
    
    print $_SERVER['REMOTE_ADDR'];

    print "<br><hr><br>";







    print "<br><hr><br>";
    print "<br><hr><br>";
    print "<br><hr><br>";



    ?>

</body>
</html>
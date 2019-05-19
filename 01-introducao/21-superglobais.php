<!DOCTYPE html>
<html lang="pt.br">
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
    */


    // Variável "$LOBALS" - armazenas variáveis globais em um array
    $a = 2;
    $b = 10;

    function soma() {
        print $GLOBALS['a'] + $GLOBALS['b'];
    }

    soma();

    print "<br><hr><br>";


    // Variável "$_SERVER" - Contém informações sbre cabeçalhos, caminhos
    // e locais de scrpts. É um array com vários índices
    // Vale a pena consultar o manual PHP conforme sua necessidade
    
    // Vamos testar algumas possibilidades
    print_r($_SERVER['PHP_SELF']);
    print "<br><hr><br>";

    print_r($_SERVER['SERVER_NAME']);
    print "<br><hr><br>";
    
    print_r($_SERVER['SCRIPT_FILENAME']);
    print "<br><hr><br>";

    print_r($_SERVER['DOCUMENT_ROOT']);
    print "<br><hr><br>";

    print_r($_SERVER['SERVER_PORT']);
    print "<br><hr><br>";
    
    print_r($_SERVER['REMOTE_ADDR']);
    print "<br><hr><br>";







    print "<br><hr><br>";
    print "<br><hr><br>";
    print "<br><hr><br>";



    ?>

</body>
</html>
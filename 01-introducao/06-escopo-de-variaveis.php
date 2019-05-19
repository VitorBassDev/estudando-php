<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Escopo de variáveis</title>
</head>
<body>

    <h1>Estudando PHP - Escopo de variáveis</h1>

    <?php

    // Desta fora não funciona (ESCOPO GLOBAL)
    // $nome = "Chico";
    // function imprimeNome() {
    //     print $nome;
    //     print "<br>";
    // }
    // imprimeNome();

    // Exemplo 1 - Variável global
    $nome = "Fulano";

    function imprimeNome() {
        // definindo variável global
        global $nome;
        print $nome;
        print "<br>";
    }
    imprimeNome();


    // Exemplo 2 - 
    function exibeCidade() {
        $cidade = "Porto Alegre";
        print $cidade;
        print "<br>";
    }

    exibeCidade();

    
    // Meu exemplo
    $pais = "Brasil";
    function imprimePais($var) {
        print $var;
        print "<br>";
    }
    imprimePais($pais);


    ?>

</body>
</html>
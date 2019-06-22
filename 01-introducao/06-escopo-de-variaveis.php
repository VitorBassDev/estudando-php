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
    <title>Estudando PHP - Escopo de variáveis</title>
</head>
<body>

    <h1>Estudando PHP - Escopo de variáveis</h1>

    <?php

    // Desta forma não funciona (ESCOPO GLOBAL)
    // $nome = "Chico";
    // function imprimeNome() {
    //     print $nome;
    //     print "<br>";
    // }
    // imprimeNome("Xuxa");

    // Exemplo 1 - Variável global
    $nome2 = "Fulano";

    function imprimeNome2() {
        // definindo variável global
        global $nome2;
        print $nome2;
        print "<br>";
    }
    imprimeNome2();


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
<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Funções de Arrays</title>
</head>
<body>

    <h1>Estudando PHP - Funções de Arays</h1>


    <?php
    /* Funções de arrays */

    // Função: "is_array($array)" = Verifica se uma determinada variável é um array
    $alunos = ["Higuinho", "Zezinho", "Luizinho"];

    print(is_array($alunos)); // retorna "1" ou seja "verdadeiro"
    print("<br>");
    var_dump($alunos);
    print("<br>");

    // Podemos efetuar um teste utilizando "if / else"
    if(is_array($alunos)):
        print "É uma array";
    else:
        print "Não é uma array";
    endif;

    print "<br><hr><br>"

    // Função: "in_array($valor, $array)" - Verifica se determinado valor
    // está no array
    print in_array("Zezinho", $alunos); // Retorna "1", ou seja, "verdadeiro"

    print "<br><hr><br>"

    // Função: "array_keys($array)" - Retorna um NOVO array 
    // com as chaves do array passado como parâmentro




    ?>

</body>
</html>
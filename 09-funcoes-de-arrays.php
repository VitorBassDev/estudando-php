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

    print "<br><hr><br>";

    // Função: "in_array($valor, $array)" - Verifica se determinado valor
    // está no array
    print in_array("Zezinho", $alunos); // Retorna "1", ou seja, "verdadeiro"

    print "<br><hr><br>";

    // Função: "array_keys($array)" - Retorna um NOVO array 
    // com as chaves do array passado como parâmentro
    // Vamos criar uma nova variável e chamar a função "array_keys()"
    $keys = array_keys($alunos);
    print_r($keys);

    print "<br><hr><br>";

    // Função: "array_values($array)" - Retorna um NOVO array 
    // com os valores do array passado como parâmentro
    $values = array_values($alunos);
    print_r($values);

    print "<br><hr><br>";

    // Função: "array_merge($array1, $array2)" - mescla o conteúdo de dois arrays
    $turmaA = ["Huguinho", "Zezinho", "Luizinho"];
    $turmaB = ["Pluto", "Patela", "Mickey"];
    // Criamos um novo array para receber o conteúdo
    $turmaC = array_merge($turmaA, $turmaB);
    print_r($turmaC);

    print "<br><hr><br>";

    // Função: "array_pop($array)" - Exclui o elemento na última posição do array
    print_r($turmaA);
    print "<br>";
    array_pop($turmaA); // Remove o último elemento = "Luizinho"
    print_r($turmaA);

    print "<br><hr><br>";

    // Função: "array_shift($array)" - Remove o elemento na primeira posição do array
    array_shift($turmaA); // Remove o primeiro elemento = "Huguinho"
    print_r($turmaA);

    print "<br><hr><br>";

    // Função: "array_unshift($array, "valor")" - Adiciona 01 ou mais elementos
    // no início do array
    array_unshift($turmaA, "Pio Patinhas", "Margarida", "Prof. Pardal");
    print_r($turmaA);

    print "<br><hr><br>";
    
    // Função: "array_push($array, "valor")" - Adiciona 01 ou mais elementos
    // no final do array
    array_push($turmaA, "Pluo", "Pateta");
    print_r($turmaA);

    print "<br><hr><br>";

    // Função: "array_combine($keys, $values)" - Mescla dois arrays
    // Os elementos do primeiro array serão as "keys" = índices
    // Os elementos do segundo array serão os "values" = elementos
    $indices = ["pais", "estado", "cidade" ];
    $valores = ["Brail", "RS", "Porto Alegre"];

    $localidade = array_combine($indices, $valores);
    print_r($localidade);

    print "<br><hr><br>";

    // Função: "array_sum()" - Retorna a soma do elementos do array
    $notas = [8.4, 5, 6.7, 9.6];
    print(array_sum($notas));

    print "<br><hr><br>";

    // Função: "explode($delimiter, $string)" - Expande uma string para uma array
    // Exemplo 01
    $data = "01/03/2019";
    // O delimitador é a "/" - "barra"
    $arrayData = explode("/", $data);
    print_r($arrayData);
    print "<br><br>";

    // Exemplo 02
    $frase = "Estudar PHP é bem legal.";
    // O delimitador é o " " - "espaço em branco"
    $arrayFrase = explode(" ", $frase);
    print_r($arrayFrase);

    print "<br><hr><br>";

    // Função: "implode($cola, $array)" - transforma array em uma string
    $arrayCursos = ["Html5", "Css3", "JavaScript", "Php", "Python"];
    print_r($arrayCursos);
    print "<br><br>";
    $stringCursos = implode(" * ", $arrayCursos);
    print_r($stringCursos);
    print "<br><br>";
    var_dump($stringCursos);


    print "<br><hr><br>";
    print "<br><hr><br>";
    print "<br><hr><br>";
   
    ?>

</body>
</html>
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
    <title>Estudando PHP - For e Foreach</title>
</head>
<body>

    <h1>Estudando PHP - For e Foreach</h1>

    <?php

    // *******************************
    // Laço de repetição - "FOR"
    // Aqui determinamos o "início, o fim e o passo"
    for ($cont = 1; $cont <= 10; $cont++):
        print "Cont vale: $cont <br>";
    endfor;

    print "<br><hr><br>";

    // Outtro exemplo
    // Crindo uma tabuada
    for ($num = 0; $num <= 10; $num++):
        print "7 x $num = ".($num * 7)."<br>";
    endfor;

    print "<br><hr><br>";

    
    // *******************************
    // Laço de repetição - "FOREACH"
    // Ideal para percorrer um "array"
    $listaCompras = ["pão", "café", "leite", "presunto"];

    foreach ($listaCompras as $valor):
        print "$valor <br>";
    endforeach;

    print "<br><hr><br>";

    foreach ($listaCompras as $indice => $valor):
        print "$indice - $valor <br>";
    endforeach;

    print "<br><hr><br>";
    print "<br><hr><br>";



    ?>

</body>
</html>
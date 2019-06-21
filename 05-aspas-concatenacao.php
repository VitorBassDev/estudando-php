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
    <title>Estudando PHP - Aspas e Concatenação</title>
</head>
<body>

    <h1>Estudando PHP - Aspas e Concatenação</h1>

    <?php

    /* Atenção ao uso das ASPAS */

    // Vamos criar uma variável e tentar imprimir o seu valor
    // Vamos usar agora astas simples (' ')
    $nome = 'Pedro';
    print 'Exemplo 1 - Meu nome não é $nome'; // Veja o resultado no navegador

    print '<br>';

    // Vamos tentas desta forma (usando o ponto ara concatenar)
    print 'Exemplo 2 - Meu nome não é '.$nome; // Veja o resultado no navegador

    print '<br>';

    // Aqui vamos usar ASPAS DUPLAS
    $idade = 20;
    print "Exemplo 3 - Meu nome não é $nome e minha idade é $idade.";



    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Constantes</title>
</head>
<body>

    <h1>Estudando PHP - Constantes</h1>


    <?php

    // Constantes no PHP
    // É o identificador para um valor único

    /* O valor de uma constante não pode alterar 
       durante a execussão do script  */

    // Definindo uma constante php (leta maiúscula)
    define('NOME', 'Marcelo Pereira');
    define('CIDADE', 'Porto Alegre');
    define('ESTADO', 'RS');

    // Concatenando strings
    print "Meu nome é NOME. Eu moro em CIDADE - ESTADO."; // Erraado
    print '<br><br>';
    print "Meu nome é ".NOME.". Eu moro em ".CIDADE." - ".ESTADO."."; // Certo


    print('<hr>');


    // COnstantes tipo array
    define('TIMES', ['Grêmio', 'Internacional', 'Juventude']);
    var_dump(TIMES);
    print '<br>';
    // Acessando pelo índice
    print TIMES[2];


    print '<hr>';


    // Constantes em PHP são "globais"
    // Definindo uma função
    function imprimeNome() {
        print NOME;
    }

    // Invocando a função
    imprimeNome();

    ?>

</body>
</html>
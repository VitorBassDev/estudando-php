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
    <title>Estudando PHP - Funções para Strings</title>
</head>
<body>

    <h1>Estudando PHP - Funções para Strings</h1>

    <?php

    // *******************************
    // Funções para Strings

    // Função "strtoupper()": Converte letras para maiúsculo
    $nome = "marcelo pereira";
    $novoNome = strtoupper($nome);

    print $novoNome;
    print "<br><hr><br>";

    // Função "strtoupper()": Converte letras para maiúsculo
    $nome = "JOÃO DA SILVA";
    $novoNome = strtolower($nome);

    print $novoNome;
    print "<br><hr><br>";

    // Comando "mb_strtolower()": Converte letras para maiúsculo
    // Resolve o problema de palavras acentuadas
    $nome = "JOÃO DA SILVA";
    $novoNome = mb_strtolower($nome);

    print $novoNome;
    print "<br><hr><br>";

    // Comando "mb_strtolower()": Converte letras para maiúsculo
    // Resolve o problema de palavras acentuadas
    $nome = "joão da silva";
    $novoNome = mb_strtoupper($nome);

    print $novoNome;
    print "<br><hr><br>";

    // Função "subtr()": Retorna parte de uma string
    // Podemos determinar pnto inicial e fina;
    // Sintaxe: "substr($variavel, iniio, comprimento)"
    $mensagem = "Estudar PHP é bem legal!";
    print substr($mensagem, 8);
    print "<br>";
    print substr($mensagem, 8, 3);

    print "<br><hr><br>";

    // Função "str_pad()": Complementa a string com determinado número de carcteres
    $palavra = "PHP";
    $nomaPalavra = str_pad($palavra, strlen($palavra)+40, " * ", STR_PAD_BOTH);
    // Opção: STR_PAD_LEFT, STR_PAD_RIGHT, STR_PAD_BOTH 
    print $nomaPalavra;

    print "<br><hr><br>";

    // Função "str_repeat()": Repete a string um número x determinado
    $palavra = "PHP 7 ";
    print str_repeat($palavra, 10); 

    print "<br><hr><br>";


    // Função "strlen()": Retorna um tamanho da string
    $frase = "Programar em PHP 7 pode ser algo bem divertido!";
    print strlen($frase); 

    print "<br><hr><br>";


    // Função "str_replace()": Substitui uma palavra em um texto
    $frase = "Programar em PHP 7 pode ser algo bem divertido!";
    $novaFrase = str_replace("PHP 7", "JavaScript", $frase); 

    print $novaFrase;
    print "<br><hr><br>";


    // Função "strpos()": Retorna a posição de uma plavra em uma frase
    $frase = "Programar em PHP 7 pode ser algo bem divertido!";
    print strpos($frase, "PHP"); 

    print "<br><hr><br>";




    print "<br><hr><br>";
    print "<br><hr><br>";
    print "<br><hr><br>";



    ?>

</body>
</html>
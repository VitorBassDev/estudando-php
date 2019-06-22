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
    <title>Estudando PHP - Variáveis</title>
</head>
<body>

    <h1>Estudando PHP - Variáveis</h1>


    <!-- Tag de abertura do PHP -->
    <?php

        // Criando variáveis em PHP
        $nome = "Marcelo";
        $sobrenome = "Pereira";
        $cidade = "Porto Alegre";

        print "Meu nome  $nome $sobrenome, eu moro em $cidade.";

        // CONCATENAÇÃO
        // Concatenando duas strings
        // Será impresso sem espaço
        print "<hr>";
        print $nome . $sobrenome;

        // INTERPOLAÇÃO
        // Concatenando duas strings
        // Será impresso COM espaço
        print "<hr>";
        print "$nome $sobrenome";


        /* 
        Variáveis em PHP são case sensitives
        $nome
        $nome123
        $Nome
        $Nome123
        $menunome
        $menu_nome
        $meuNome
        */    
    ?><!-- Tag de fechameto do PHP-->


    
</body>
</html>
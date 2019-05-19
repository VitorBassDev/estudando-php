<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Declarações Condicionais</title>
</head>
<body>

    <h1>Estudando PHP - Declarações Condicionais</h1>

    <?php

    // "if" - retorna "true" se condição for verdadeira
    // EXEMPLO 01:
    $idade = 46;

    if ($idade < 1):
        print "Idade inválida";
    elseif ($idade >= 60):
        print "Terceira idade.";
    elseif ($idade >= 18):
        print "Maior de idade";
    else:
        print "Menor de idade";
    endif;


    print "<br><hr><br>";

    // EXEMPLO 02 - Operador ternário
    $idade = 17;
    print ($idade >= 18) ? "Maior de idade" : "Menor de idade";

    print "<br><hr><br>";

    // Forma curta ou "short form"
    $nome = null;
    echo ($nome) ?: "Sem nome";

    print "<br><hr><br>";

    // Outro exemplo de ternário
    $boolean = true;
    list( $a, $b, $c ) = ( ( $boolean ) ? array( 'um', 'dois', 'três' ) : array( 'três', 'dois', 'um' ) );
    var_dump( $a, $b, $c );



    // switch
    // case
    // EXEMPLO 01

    $cor = "verde";

    switch ($cor):
        case 'vermelho':
        print 'A cor é vermelho';
        break;

        case 'azul':
        print 'A cor é azul';
        break;

        case 'verde':
        print 'A cor é verde';
        break;
        
        default:
        print 'Cor inválida';
        break;
    endswitch;

    print "<br><hr><br>";
    print "<br><hr><br>";
    print "<br><hr><br>";
    print "<br><hr><br>";
   
    ?>

</body>
</html>
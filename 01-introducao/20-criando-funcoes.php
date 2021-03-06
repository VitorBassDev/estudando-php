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
    <title>Estudando PHP - Criando Funções</title>
</head>
<body>

    <h1>Estudando PHP - Criando Funções</h1>

    <?php

    // *******************************
    // FUNÇÕES EM PHP

    /* Devemos sempre que possível, criar funções para realizar 
       aquelas tarfas que se repetem. Assim reduzimos a quantidade
       de código, além de facilitar a leitura e entendimento do mesmo.
    */

    // Exemplo 01 - função "sem parâmetros"
    function imprimeNome() {
        print "Meu nome é Marcelo Pereira";
    }

    // Invocando a função "imprimeNome()"
    imprimeNome();

    print "<br><hr><br>";


    // Exemplo 02 -função "com parâmetros"
    // Neste caso ao chamar a função será necessário passar o nome
    function imprimeNome2($nome) {
        print $nome;
    }

    // Invocando a função e passando o nome (sting)
    imprimeNome2("João da Silva");

    print "<br><hr><br>";



    // Exemplo 03 - Função "Calclar a Média do Aluno"
    function calcularMediaAluno($aluno, $nota1, $nota2, $nota3) {
        // Calculando a média
        $media = round( ($nota1 + $nota2 + $nota3) / 3, 2);
        // Verificando se aprovado ou reprovado
        if($media >= 7):
            print "O aluno(a) $aluno foi aprovado com média <strong>$media</strong>.";
        else:
            print "O aluno(a) $aluno foi reprovado com média <strong>$media</strong>.";
        endif;
    }

    // Invocando a função "calcularMediaAluno()"
    calcularMediaAluno("Maria Lúcia", 7, 8.5, 9);
    print "<br><hr><br>";
    calcularMediaAluno("Rodrigo Santos", 7, 4, 6);



    print "<br><hr><br>";
    print "<br><hr><br>";
    print "<br><hr><br>";
    print "<br><hr><br>";



    ?>

</body>
</html>
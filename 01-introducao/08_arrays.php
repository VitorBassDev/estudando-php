<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Arrays</title>
</head>
<body>

    <h1>Estudando PHP - Arays</h1>


    <?php
        // Forma 01 - Criando um Array
        $listaMercado = array("Arroz", "Feijão", "Maçã", "Carne");
        // Imprime todo array
        print_r($listaMercado);

        print('<br><hr><br>');

        // acessando elemento pelo índice
        print($listaMercado[1]);

        print('<br><hr><br>');

        // Definindo os índices do array
        $listaMercado = array(1=>"Arroz", 2=>"Feijão", 3=>"Maçã", 4=>"Carne");
        print($listaMercado[1]);

        print('<br><hr><br>');

        // Inserindo nov elemento n array
        $listaMercado[] = "Presunto";
        $listaMercado[10] = "Leite";
        print_r($listaMercado); // Imprimindo lista atualizada

        print('<br><hr><br>');

        /////////////////////////////////
        // Outra forma de dfinir um Array
        $alunos = ["Maria", "João", "Pedro", "Fulano"];
        print_r($alunos);

        print('<br><hr><br>');

        ////////////////
        // Função 'count()'
        // Retorna o número de elementos no array
        print count($alunos);
        print('<br><hr><br>');

        // Podemos atribuir a uma variável
        $totalAlunos = count($alunos);
        print $totalAlunos;
        print('<br><hr><br>');

        ////////////////
        // Função 'foreach()'
        // Iterando o array
        foreach($alunos as $aluno) {
            print $aluno.'<br>';
        }

        print('<br><hr><br>');

        /////////
        // Arrays Associativos (índices ou chaves são strings)
        $pessoa = ["nome" => "Mrcelo", "cidade" => "Porto Aegre", "estado" => "RS"];
        var_dump($pessoa);
        print('<br>'.$pessoa["cidade"]);

        print('<br><hr><br>');

        /////////
        // Iterando o array com "foreach"
        foreach ($pessoa as $indice => $valor) {
            print  $indice.": ".$valor."<br>";
        }

        print('<br><hr><br>');

        ////////////
        // Arrays Multidimensionais
        $produtos = array(
            "frutas" => array("maça", "banana", "laranja"),
            "legumes" => array("beterraba", "mandioca", "cebola"),
            "farinha" => array("farinha de milho", "farinha de trogo", "farinha de mandioca")
        );
        /// Acessando pelos índices
        print $produtos["legumes"][0];
        print('<br>');
        // Iterando o array com "foreach"
    foreach ($produtos["farinha"] as $key => $value) {
            print $key.": ".$value."<br>";
        }

        print('<br><hr><br>');

    ?>

</body>
</html>
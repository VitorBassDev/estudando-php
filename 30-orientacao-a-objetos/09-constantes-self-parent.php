<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Orientação a Objetos - Constantes, Self e Parent</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-3">Estudando PHP - Orientação a Objetos</h1>
<h4>Constantes, Self e Parent</h4>
<hr class="my-3">

<?php

class Pessoa {
    // Criando uma "constante"
    const nome = "Marcelo";

    public function imprimeNome() {
        print self::nome;
    }
}

class Aluno extends Pessoa {
    // Criando uma "constante"
    const nome = "Pereira";

    public function imprimeNome() {
        // Imprime "Pereira"
        // print self::nome;
        // Imprime "Marcelo"
        print parent::nome;
    }
}


print "<br><br>";

$aluno1 = new Aluno;
$aluno1->imprimeNome();

print "<hr>";


?>





</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
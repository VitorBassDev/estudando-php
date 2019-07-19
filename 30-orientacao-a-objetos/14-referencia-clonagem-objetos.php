<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Orientação a Objetos - Referência e Clonagem de Objetos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-3">Estudando PHP - Orientação a Objetos</h1>
<h4>Referência e Clonagem de Objetos</h4>
<hr class="my-3">

<br>

<?php

// Referência e Clonagem de Objetos

class Pessoa {
    public $idade;

    // Método mágico é inicializado quando utilizamos a palavra chave "clone"
    public function __clone() {
        print "Objeto clonado. Idade: ";
    }
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

// "pessoa2" não é uma nova instância da classe "Pessoa"
// "pessoa2" é um objeto que faz referência ao objeto "pessoa"
$pessoa2 = $pessoa;
$pessoa2->idade = 35;

print $pessoa->idade;

print "<br><br>";


// "pessoa3" é um clone de pessoa (é um novo objeto)
$pessoa3 = clone $pessoa;
$pessoa3->idade = 45;
print $pessoa->idade;
print "<hr>";
print $pessoa3->idade;

print "<hr>";


?>





</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
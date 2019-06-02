<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Orientação a Objetos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-3">Estudando PHP - Orientação a Objetos</h1>
<h4>Classes, Atributos e Métodos</h4>
<hr class="my-3">

<?php

// Criando a classe "Pessoa"
class Pessoa {
    public $nome;
    public $idade;

    // Criando método "Falar()"
    public function Falar() {
        print $this->nome." falou: <strong>'Bla bla bla!!!'</strong> <br>";
    }
}

// Instanciando um objeto da classe Pessoa
$pessoa1 = new Pessoa();
$pessoa1->nome = "João da Silva";
$pessoa1->idade = 20;
$pessoa1->Falar();

print "<hr>";
var_dump($pessoa1);
print "<hr>";

// Acessando nome da pessoa
print $pessoa1->nome;


?>





</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Orientação a Objetos - Namespaces</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-3">Estudando PHP - Orientação a Objetos</h1>
<h4>Namespaces</h4>
<hr class="my-3">

<br>

<?php

// NAMESPACES: ideal para evitar conflito entre classes com mesmo nome

// Importando as classes
require 'classes/produto.php';
require 'models/produto.php';

// Declarando o namespace "classes"
$produto1 = new \classes\Produto();
// Chamando o método
$produto1->mostrarDetalhes();

print "<br><hr>";

// Declarando o namespace "models"
$produto2 = new \models\Produto();
// Chamando o método
$produto2->mostrarDetalhes();


print "<br><hr>";


##############
// EXEMPLO 02

// Declarando um "use"
use models\Produto;

$produto3 = new Produto();
// Chamando o método
$produto3->mostrarDetalhes();



print "<br><hr>";


##############
// EXEMPLO 03

// Definindo um apelido
use classes\Produto as productClassesl;

$produto4 = new productClassesl();
// Chamando o método
$produto4->mostrarDetalhes();




?>

</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
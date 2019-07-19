<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Orientação a Objetos - Relação entra Objetos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-3">Estudando PHP - Orientação a Objetos</h1>
<h4>Relação entra Objetos - Associação</h4>
<hr class="my-3">

<br>

<?php

// Associação: contece quando um objeto "utiliza" outro, 
// porém, sem que eles dependam um do outro


// Criando as classes "Pedido" e "Cliente"
class Pedido {
    public $numro;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereco;
}

// Criando bjetos
$cliente1 = new Cliente();
$cliente1->nome = "João da Silva";
$cliente1->endereco = "Rua da Praia, 123";

$pedido = new Pedido();
$pedido->numero = 12345;
// Atributo cliente recebe o objeto "cliente1"
$pedido->cliente = $cliente1;

// Criand um array para armazenar dados do pedido
$dados = [
    'numero' => $pedido->numero,
    'nome_cliente' =>$pedido->cliente->nome,
    'endereco_cliente' =>$pedido->cliente->endereco
];


// Imprimindo dados do pedido
var_dump($dados);

print "<br><br>";

print "<hr>";


?>





</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
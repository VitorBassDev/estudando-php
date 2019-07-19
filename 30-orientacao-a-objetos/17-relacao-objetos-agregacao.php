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

// Agregação:
/* 
    Na Agregação, uma classe precisa da outra para executar sua ação
    ou seja, uma classe utiliza a outra como parte de si
*/ 

class Produtos {
    public $nome;
    public $valor;

    // Método construtor da classe
    function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    // Armazena as propriedades dos produtos
    public $produtos;

    // Método para adicionar os produtos ao carrinho
    // O parâmetro deve ser uma instância da classe "Produtos"
    public function adicionaProduto(Produtos $produto) {

        // Array para armazenar o objeto
        $this->produtos[] = $produto;
    }

    // Método para exibir os produtos do carrinho
    public function exibeProdutos() {
        foreach ($this->produtos as $produto) {
            print $produto->nome.": R$ ".$produto->valor."<hr>";
        }
    }
}

// Criando objetos da classe "Produtos()"
$produto1 = new Produtos("Notebook", "3500");
$produto2 = new Produtos("Mouse", "50");

// Criando carrinh
$carrinho = new Carrinho();

// Invocando o método para adicionar produtos
$carrinho->adicionaProduto($produto1);
$carrinho->adicionaProduto($produto2);

// Invocando o método para imprimir a lista de produtos
$carrinho->exibeProdutos();

print "<br><br>";
print "<hr>";


?>

</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
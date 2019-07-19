<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Orientação a Objetos - Tratamento de Exceções</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-3">Estudando PHP - Orientação a Objetos</h1>
<h4>Tratamento de Exceções</h4>
<hr class="my-3">

<br>

<?php

// "Exception" é a classe base para lançar erros no PHP
// - message, code, file, line -

class Newsletter {

    public function cadastrarEmail($email) {
        // Validando email
        // Se a condição for falsa o email não é válido
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Email inválido", 500);
        else:
            print "Email cadastrado com sucesso";
        endif;
    }
}

// Criando objeto
$newsletter = new Newsletter();

// Tratando a exceção com o bloco "try / Catch"
try {
// Invocando o método "cadastrarEmail()"
$newsletter->cadastrarEmail("email@errado");
// $erros é um objeto que contém algumas informações sobre a exceção
} catch(Exception $erros) {
    print "Menssagem: ".$erros->getMessage()."<br>";
    print "Código do erro: ".$erros->getCode()."<br>";
    print "Arquivo: ".$erros->getFile()."<br>";
    print "Linha: ".$erros->getLine()."<br>";
}





print "<br><br>";

print "<hr>";


?>





</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
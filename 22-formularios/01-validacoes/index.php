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
    <title>Estudando PHP - Formulários - Validações</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-5">Estudando PHP - Formulários - Validações</h1>

<?php

// Validações

if (isset($_POST['enviar-formulario'])):
    // Verificando se clicou no botão
    // print "Enviouuuuuuuuuu <br><br>";

    // Criando um array para armazenar os erros
    $erros = array();
    
    // Verifica se está vazio
    if(empty($_POST['idade'])):
        $erros[] = '<div class="alert alert-danger" role="alert">Campo peso: obrigatório</div>';        
    // Verificar se é do "tipo inteiro"
    elseif(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = '<div class="alert alert-danger" role="alert">A indade precisa ser um inteiro</div>';
    endif;

    // Verifica se está vazio
    if(empty($_POST['peso'])):
        $erros[] = '<div class="alert alert-danger" role="alert">Campo peso: obrigatório</div>';
    // Verificar se é do "tipo float"
    elseif(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = '<div class="alert alert-danger" role="alert">O peso precisa ser um FLOAT</div>';
    endif;

    // Verifica se está vazio
    if(empty($_POST['email'])):
        $erros[] = '<div class="alert alert-danger" role="alert">Campo email: obrigatório</div>';
    // Verificar se está no de "formato email válido"
    elseif(!$email = filter_input(INPUT_POST, 'pesemailo', FILTER_VALIDATE_EMAIL)):
        $erros[] = '<div class="alert alert-danger" role="alert">Email inválido</div>';
    endif;

    // Imprimindo mensagens de erro
    if(!empty($erros)):
        foreach($erros as $erro):
            print "$erro";
        endforeach;
    else:
        print '<div class="alert alert-success" role="alert">Dados enviados com sucesso!</div>';
    endif;
endif;

?>

<!-- Neste exemplo vamos processar o formulário nesta mesma página  -->

<!-- 
A variável "$_SERVER" - é uma "supergloval" que Contém informações sbre cabeçalhos,
caminhos e locais de scrpts. É um array com vários índices -->
<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-row">
        <div class="form-group col-md-1">
        <label for="idade">Idade</label>
        <input type="text" class="form-control" name="idade">
        </div>

        <div class="form-group col-md-1">
        <label for="peso">Peso</label>
        <input type="text" class="form-control" name="peso">
        </div>

        <div class="form-group col-md-4">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email">
        </div>
    </div>
    <button class="btn btn-primary" type="submit" name="enviar-formulario">Enviar</button>
    <button class="btn btn-danger" type="clear" name="limpar">Limpar</button>
</form>

<hr class="my-5">

<?php
    foreach ($_POST as $key => $value) {
        print "$key - $value <br>"; 
    }
?>

</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
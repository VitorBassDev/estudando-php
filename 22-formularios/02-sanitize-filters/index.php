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
    <title>Estudando PHP - Formulários - Sanitize Filters</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-5">Estudando PHP - Sanitize Filters</h1>

<?php

if (isset($_POST['enviar-formulario'])):

    // Array de erros
    $erros = array();
    
    // Verifica se está vazio
    if(empty($_POST['nome'])):
        $erros[] = '<div class="alert alert-danger" role="alert">Campo Nome: obrigatório</div>';
    else:
        // Sanitize Filters
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        print $nome;
    endif;

    // Verifica se está vazio
    if(empty($_POST['email'])):
        $erros[] = '<div class="alert alert-danger" role="alert">Campo Email: obrigatório</div>';
    else:
        // Sanitize Filters
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        print $email;
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

<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="form-row">
        <div class="form-group col-md-4">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome">
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

</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
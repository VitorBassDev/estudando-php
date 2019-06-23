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
    <!-- CSS Bootstrap 4.3 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <title>Estudando PHP - Formulários - Sanitize Filters</title>
</head>
<body>
    <div class="container">

    <h1 class="my-5">Estudando PHP - Sanitize Filters</h1>

    <?php

    // Validações de formulário em PHP

    // Verifica "se existe" o índice "enviar" na superglobal $_POST
    if (isset($_POST['enviar'])):
        // Verificando se clicou no botão
        // print '<div class="alert alert-success">Eviou</div>';

        // Criando um array para armazenar os erros
        $erros = array();
        
        // VALIDA NOME ********
        // Verifica se está vazio
        if(empty($_POST['nome'])):
            $erros[] = "Campo Nome: obrigatório";
        else:
            // Sanitize Filters
            $newStr = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $nome = $newStr;
        endif;

        // VALIDA EMAIL ********
        // Verifica se está vazio
        if(empty($_POST['email'])):
            $erros[] = "Campo Email: obrigatório";
        else:
            // Sanitize Filters
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            // Verificar se está no de "formato email válido"
                if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                    $erros[] = "Email inválido";
                endif;
        endif;


        // Imprimindo mensagens de erro
        if(!empty($erros)):
            foreach($erros as $erro):
                print '<div class="alert alert-danger" role="alert">'.$erro.'</div>';
            endforeach;
        else:
            print '<div class="alert alert-success" role="alert">Dados enviados com sucesso!</div>';
        endif;
    endif;


    ?>

    <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-row">
            <div class="form-group col-md-5">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
            </div>

            <div class="form-group col-md-5">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="enviar">Enviar</button>
        <button class="btn btn-danger" type="clear" name="limpar">Limpar</button>
    </form>

    <hr class="my-5">

    <?php var_dump($_POST); ?>
   
    </Campo><!-- Fim container-->

<!-- JQuery / Popper / Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
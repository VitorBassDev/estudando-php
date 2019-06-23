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
    <!-- CSS Bootstrap 4.3 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">

    <h1 class="my-5">Estudando PHP - Formulários - Validações</h1>

    <?php

    // Validações de formulário em PHP

    // Verifica "se existe" o índice "enviar" na superglobal $_POST
    if (isset($_POST['enviar'])):
        // Verificando se clicou no botão
        // print '<div class="alert alert-success">Eviou</div>';

        // Criando um array para armazenar os erros
        $erros = array();
        
        // VALIDA IDADE ********
        // Verifica se está vazio
        if(empty($_POST['idade'])):
            $erros[] = "Campo peso: obrigatório";        
        // Verificar se não é do "tipo inteiro"
        elseif(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
            $erros[] = "A indade precisa ser um inteiro";
        endif;

        // VALIDA PESO ********
        // Verifica se está vazio
        if(empty($_POST['peso'])):
            $erros[] = "Campo peso: obrigatório";
        // Verificar se é do "tipo float"
        elseif(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
            $erros[] = "O peso precisa ser um FLOAT";
        endif;

        // VALIDA EMAIL ********
        // Verifica se está vazio
        if(empty($_POST['email'])):
            $erros[] = "Campo email: obrigatório";
        // Verificar se está no de "formato email válido"
        elseif(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = "Email inválido";
        endif;

        // **********************
        // MENSAGENS DE ERROS
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

    <!-- Neste exemplo vamos processar o formulário nesta mesma página  -->

    <!-- 
    A variável "$_SERVER" - é uma "supergloval" que Contém informações sbre cabeçalhos,
    caminhos e locais de scrpts. É um array com vários índices -->
    <form action="" method="POST">
        <div class="form-row">
            <div class="form-group col-md-1">
            <label for="idade">Idade</label>
            <input type="text" class="form-control" name="idade" id="idade">
            </div>

            <div class="form-group col-md-1">
            <label for="peso">Peso</label>
            <input type="text" class="form-control" name="peso" id="peso">
            </div>

            <div class="form-group col-md-4">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">
            </div>
        </div>
        <!-- <button class="btn btn-primary" type="submit" name="enviar-formulario">Enviar</button> -->
        <button class="btn btn-primary" type="submit" name="enviar">Enviar</button>
        <button class="btn btn-danger" type="clear" name="limpar">Limpar</button>
    </form>

    <hr class="my-5">

    <?php
        var_dump($_POST);

        print "<br><hr>";

        foreach ($_POST as $key => $value) {
            print "$key - $value <br>"; 
        }
    ?>

    </div><!-- Fim container-->


    <!-- JQuery / Popper / Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
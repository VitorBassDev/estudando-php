<?php
// Invocando a função de conexão com banco de dados
require_once 'db_connect.php';

// Iniciando a Sessão
session_start();

// Verifica se o botão "Entrar" foi clicado
if(isset($_POST['btn-entrar'])):

    // Criando array para armazenar os erros
    $erros = array();

    // 
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    $_SESSION['login'] = 'login';
    $_SESSION['senha'] = 'senha';

    if(empty($login) or empty($senha)):
        $erros[] = 'O campo login/lenha precisa ser preenchido';
    else:
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
        $senha = md5($senha);
        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            else:
                $erros[] = 'Usuário e senha não conferem';
            endif;

        else:
            $erros[] = 'Usuário não existe';
        endif;
    endif;
endif;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Estudando PHP - Sistema de login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <!-- CSS Style -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Início Container -->    
    <div class="container">

        <form class="form-signin my-5" action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST">
            <h1 class="h3 mb-3 font-weight-normal text-center">Sistema de login</h1>

            <?php
                // Se huver erro - exibe o erro
                if(!empty($erros)):
                    foreach($erros as $erro):
                        print '<div class="alert alert-danger">'.$erro.'</div>';
                    endforeach;
                endif;
            ?>

            <input type="text" class="form-control" name="login" placeholder="Login" autofocus>
            <input type="password" class="form-control" name="senha" placeholder="Senha">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn-entrar">Entrar</button>
        </form>

    </div><!-- Fim container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
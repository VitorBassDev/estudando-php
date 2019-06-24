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
    <title>Estudando PHP - Sessões</title>
</head>
<body>

    <div class="container">
    

    <h1>Estudando PHP - Sessões</h1>

    <hr>

    <?php
    /* 
        SESSÃO  ()
        Armazena dados persistentes dentro do tempo de sessão definido ou até fechar o navegador
        - Valor padrão: 20 minutos
    */

    // Criando sessões no PHP
    // Iniciando uma sessão
    session_start();

    // Verificação
    if(isset($_SESSION['nome'])):
        print '<div class="alert alert-success">Você está logado no sistema.</div>';
        print '<a href="painel.php" class="btn btn-success mr-2">Acessar painel</a>';
    else:
        print '<p>Por favor faça seu login no sistema.</p>';

        print '
        <form action="" method="POST">
        <button class="btn btn-success" type="submit" name="logar" >Logar</button>
        </form>';
    endif;
    
    if(isset($_POST['logar'])):

        // Criando sessões no PHP
        $_SESSION['nome'] = 'Marcelo Pereira';
        $_SESSION['cidade'] = 'Porto Alegre';

        // Redireciona usuário para página "painel.php"
        header('Location: painel.php');
    endif;

    ?>

</div><!-- Fim container-->

<!-- JQuery / Popper / Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
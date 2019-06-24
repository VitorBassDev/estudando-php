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
    
    <h1 class="mb-3">Painel</h1>

    <?php

    // Iniciando uma sessão
    session_start();

    // Verificação
    if(!isset($_SESSION['nome'])):
        print '<div class="alert alert-danger">Acesso negado. Por favor efetue login.</div>';

    elseif($_SESSION['nome'] == "Marcelo Pereira"):
        print '<div class="alert alert-success">Acesso liberado ao sistema!</div> <br>';
        print '<h3>Olá '.$_SESSION['nome'].'!</h3><br>';
        print 'Cidade: '.$_SESSION['cidade'].'<br>';
        print 'ID: '.session_id();
    else:
        // Redireciona usuário para página "index.php"
        // header('Location: index.php');
        print '<div class="alert alert-danger">Acesso negado. Por favor efetue login.</div>';
    endif;

    
    print '<br><hr><br>';

    print '<a href="index.php" class="btn btn-success mr-2">Voltar ao início</a>';
    print '<a href="logout.php" class="btn btn-warning text-white">Logoff</a>';

    ?>


</div><!-- Fim container-->

<!-- JQuery / Popper / Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
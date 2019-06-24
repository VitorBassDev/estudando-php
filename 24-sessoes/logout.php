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
    // Limpando a sessão
    session_unset();
    // Destruindo sessão
    session_destroy();


    print '<div class="alert alert-warning">Você saiu do sistemas!</div>';
    print '<br><hr><br>';
    print '<a href="index.php" class="btn btn-success mr-2">Voltar ao início</a>';


    ?>


</div><!-- Fim container-->

<!-- JQuery / Popper / Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>




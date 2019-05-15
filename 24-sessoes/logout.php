<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Sessões</title>
</head>
<body>
    
    <h1>Logout</h1>
    <hr>
    <h3>Você foi desconectado</h3>

    <?php

    // Iniciando uma sessão
    session_start();
    // Limpando a sessão
    session_unset();
    // Destruindo sessão
    session_destroy();

    print '<a href="index.php"><button>Voltar</button></a>';

    ?>
</body>
</html>
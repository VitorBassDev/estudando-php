<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Sessões</title>
</head>
<body>
    
    <h1>Painel</h1>

    <?php

    // Iniciando uma sessão
    session_start();

    print 'Olá '.$_SESSION['nome'].'!<br>'.$_SESSION['cidade'].'<br><br>';

    print 'Acesso liberado ao sistemas! Sei ID é :'.session_id();

    print '<br><hr><br>';

    print '<a href="index.php"><button>Voltar</button></a>';
    print '<a href="logout.php"><button>Logoff</button></a>';

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Sessões</title>
</head>
<body>
    
    <h1>Estudando PHP - Sessões</h1>

    <?php
    /* 
        SESSÃO  ()
        Armazena dados persistentes dentro do tempo de sessão definido ou até fechar o navegador
        - Valor padrão: 20 minutos
    */

    
    // Criando sessões no PHP
    // Iniciando uma sessão
    session_start();

    // Criando uma sessão
    $_SESSION['nome'] = 'Marcelo Pereira';
    $_SESSION['cidade'] = 'Porto Alegre';

    print 'DADOS DO SUSUÁRIO:<br><br>Nome:'.$_SESSION['nome'].'<br>Cidade:'.$_SESSION['cidade'].'<br>';
    print 'User ID: '.session_id();
    print '<br><hr><br>';

    print '<a href="painel.php"><button>Logar</button></a>';

    ?>
</body>
</html>
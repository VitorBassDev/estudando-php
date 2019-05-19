<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Formulário - Métodos GET e POST</title>
</head>
<body>

    <h1>Estudando PHP - Formulário - Métodos GET e POST</h1>

    <?php

    /*
        As superglobais GET e POST servem para
        coletar dados de formulários
    */ 

    ?>

    <!-- Método POST (forma mais segura)-->
    <!-- <form action="dados.php" method="POST"> -->
    <form action="dados.php" method="GET">

        Nome: <input type="text" name="nome">
        <br><br>
        Email: <input type="email" name="email">
        <br><br>
        <button type="submit">Enviar</button>

    </form>

    <br><br>

    <!-- Exemplo 2: Enviando dados via link -->
    <a href="dados.php?nome=Marcelo&sobrenome=Pereira&cidade=Porto+Alegre">Enviar dados</a>



</body>
</html>
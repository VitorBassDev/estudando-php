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
    <title>Estudando PHP - Formulário - Métodos GET e POST</title>
</head>
<body>

    <h1>Estudando PHP - Formulário - Métodos GET e POST</h1>

    <!-- As superglobais GET e POST servem para
         coletar dados de formulários -->

    <h2>Enviando dados via POST</h2>
    <!-- Método POST (forma mais segura)-->
    <form action="recebe-via-post.php" method="POST">
        <label for="nome">NOME </label>
        <input type="text" name="nome" id="nome" required >
        <br><br>
        <label for="email">EMAIL </label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="telefone">TELEFONE </label>
        <input type="tel" name="telefone" id="telefone" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <br>
    <hr>
    <br>
    
    <h2>Enviando dados via GET</h2>
    <!-- Método GET (forma menos segura)
         Neste caso os dados são enviados via URL
         Os dados serão expostos na barra de endereços do navegador
    -->
    <form action="recebe-via-get.php" method="GET">
        <label for="nome">NOME </label>
        <input type="text" name="nome" id="nome" required >
        <br><br>
        <label for="email">EMAIL </label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="telefone">TELEFONE </label>
        <input type="tel" name="telefone" id="telefone" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

    <br>
    <hr>
    <br>

    <!-- Exemplo 3: Enviando dados via link -->
    <h2>Enviando dados via GET</h2>
    <!-- Exemplo 2: Enviando dados via link -->
    <a href="recebe-via-link.php?nome=Marcelo&email=marcelo@teste.com&telefone=51-99999-4444">Enviar dados via URL</a>

</body>
</html>
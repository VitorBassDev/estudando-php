<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Orientação a Objetos - Interfaces</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-3">Estudando PHP - Orientação a Objetos</h1>
<h4>Interfaces</h4>
<hr class="my-3">

<?php

// INTERFACE: definir um modelo a ser usado por outras classes

#############
#  A responsabilidade de criar a lógicas dos métdos,
#  será da classe que implementar a interface
#############

interface Crud {
    // Declaração de métodos
    // Os métodos devem ser públicos e passar algum parâmetro se necessário
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

// Aqui implementamos a interface "Crud"
class Posts implements Crud {

    // A classe "Posts" é obrigada a ter estes métodos
    public function create($data) {
        // lógica para criar um post
    }
    public function read() {
        // lógica para ler um post
    }
    public function update() {
        // lógica para alterar um post
    }
    public function delete() {
        // lógica para deletar um post
    }

}



print "<br><br>";


print "<hr>";


?>





</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
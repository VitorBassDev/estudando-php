<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Orientação a Objetos - Polimorfismo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-3">Estudando PHP - Orientação a Objetos</h1>
<h4>Polimorfismo</h4>
<hr class="my-3">

<?php

// POLIMORFISMO: reescrever um método herdado da classe mãe.

// Criando a classe Mãe
class Animal {

    // Método "Andar()"
    public function Andar() {
        print "O animal andou.";
    }

    // Método "Correr()"
    public function Correr() {
        print "O animal correu!";
    }

}

// Criando a classe filha
class Cavalo extends Animal {

    public function Andar() {
        // print "O cavalo andou!"; // Reescrevendo o método
        $this->Correr();  // Chamando outro método
    }
}



print "<br><br>";

// Criando objeto
$animal1 = new Cavalo();
$animal1->Andar();

print "<hr>";


?>





</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
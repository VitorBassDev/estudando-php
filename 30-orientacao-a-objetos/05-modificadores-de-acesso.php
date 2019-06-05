<!DOCTYPE html>
<html lang="pt.br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Orientação a Objetos - Modificadores de acesso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-3">Estudando PHP - Orientação a Objetos</h1>
<h4>Modificadores de acesso</h4>
<hr class="my-3">

<?php

class Veiculo {
    protected $modelo;
    protected $cor;
    protected $ano;

    // Modelo
    public function setModelo($mod) {
        return $this->modelo = $mod;
    }

    public function getModelo() {
        return $this->modelo;
    }

    // Cor
    public function setCor($cor) {
        return $this->cor = $cor;
    }

    public function getCor() {
        return $this->cor;
    }

    // Ano
    public function setAno($ano) {
        return $this->ano = $ano;
    }

    public function getAno() {
        return $this->ano;
    }


    // Métodos
    public function Andar() {
        print "Andou...";
    }

    public function Parar() {
        print "Parou...";      
    }

}

class Carro extends Veiculo {

    // Método válido apenas para classe "Carro"
    public function ativarAirBag() {
        print "Airbag ativado!";
    }


}

class Moto extends Veiculo {
    
    // Método válido apenas para classe "Moto"
    public function empinarMoto() {
        print "Empinando moto";
    }

}


print "<br><br>";

// Criando novo objeto da classe "Carro"
$carro1 = new Carro();
$carro1->setModelo("GOL");
$carro1->setcor("Preto");
$carro1->setAno("2019");

$carro1->ativarAirBag();
print "<br>";
var_dump($carro1);

print "<hr>";


// Criando novo objeto da classe "Moto"
$moto1 = new Moto();
$moto1->Andar();
print "<br>";
$moto1->empinarMoto();



print "<hr>";


?>





</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
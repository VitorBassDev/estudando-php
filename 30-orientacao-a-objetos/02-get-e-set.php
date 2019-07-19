<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Orientação a Objetos - Get e Set</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-3">Estudando PHP - Orientação a Objetos</h1>
<h4>Get e Set</h4>
<hr class="my-3">

<?php

// Criando a classe "Login"
class Login {
    private $email;
    private $senha;

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        // FIltrando caracteres inválidos para email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        return $this->senha = $senha;
    }

    public function Logar() {
        if($this->email == "teste@gmail.com" and $this->senha == "1234"):
            print '<div class="alert alert-success" role="alert">Login efetuado com sucesso!</div>';
        elseif($this->email != "teste@gmail.com" xor $this->senha != "1234"):
            print '<div class="alert alert-warning" role="alert">Email ou senha inválidos. Por favor tente novamente.</div>';
        else:
            print '<div class="alert alert-danger" role="alert">Dados inválidos. Por favor tente novamente.</div>';
        endif;
    }
}

// Instanciar novo objeto da classe "Login"
$acesso1 = new Login();
$acesso1->setEmail("teste()///</>@gmail.com"); // Adicionados caracteres inválidos
$acesso1->setSenha("1234");
var_dump($acesso1);
print "<br><br>";

$acesso1->Logar();
print "<hr>";


// Instanciar novo objeto da classe "Login"
$acesso2 = new Login();
$acesso2->setEmail("teste@gmail.com>>>>");
$acesso2->setSenha("3333");
var_dump($acesso2);
print "<br><br>";

$acesso2->Logar();
print "<hr>";


// Instanciar novo objeto da classe "Login"
$acesso3 = new Login();
$acesso3->setEmail("teste@terra.com>>>>>");
$acesso3->setSenha("3333");
var_dump($acesso3);
print "<br><br>";

$acesso3->Logar();
print "<hr>";


?>





</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
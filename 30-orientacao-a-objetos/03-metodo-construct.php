<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudando PHP - Orientação a Objetos - Método Construct</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container">

<h1 class="my-3">Estudando PHP - Orientação a Objetos</h1>
<h4>Método Construct</h4>
<hr class="my-3">

<?php

// Criando a classe "Login"
class Login {
    private $nome;
    private $email;
    private $senha;


    // Método construtor
    public function __construct($nome, $email, $senha) {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }


    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        return $this->nome = $nome;
    }

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
$acesso1 = new Login("João da Silva", "teste@gmail.commmmmm", "12344444");

var_dump($acesso1);
print "<br><br>";

$acesso1->Logar();
print "<hr>";


?>





</div><!-- Fim container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"  ></script>
</body>
</html>
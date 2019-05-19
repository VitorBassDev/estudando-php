<?php

/*
   Este arquivo "dados.php" irá coletar os dados enviados
   pelo formulário
*/

// Exemplo 01 - Recebendo dados do formulário
// Vamos utilizar a superglobal $_POST
// $nome = $_POST['nome'];
// $email = $_POST['email'];

// var_dump($_POST);
// print "Seu nome é $nome e seu email é $email.";



// ****************************************************


// Exemplo 02 - Recebendo dados do formulário
// Vamos utilizar a superglobal $_GET
// $nome = $_GET['nome'];
// $email = $_GET['email'];

// var_dump($_GET);
// print "Seu nome é $nome e seu email é $email.";


// ****************************************************


// Exemplo 02 - Recebendo dados via link
// Vamos utilizar a superglobal $_GET
// Aqui atribuimos cada parâmetro passados via link na página "index.php"
print "Olá ".$_GET['nome']." ".$_GET['sobrenome']."! Sua cidade é:  ".$_GET['cidade'];

print "<br><hr><br>";
var_dump($_GET);

<!-- 
    Estudando PHP
    
    Códigos comentados por Marcelo Pereira
    https://github.com/marcelopoars
    https://marcelopoars.github.io/
 -->

<?php

/*
   Este arquivo "recebe-via-post.php" irá coletar os dados enviados
   pelo formulário
*/

// Vamos utilizar a superglobal $_POST
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

print '<h2>Dados armazenados na superglobal <strong>$_POST</strong></h2>';
var_dump($_POST);

print "<hr>";
print "<h2>Recebendo dados via POST</h2>";
print "Seu nome é:
   <h3>$nome</h3>
   Seu email é:
   <h3>$email</h3>
   Seu telefone é:
   <h3>$telefone</h3>";


print "<hr>";
print "<h2>Percorrendo o array com 'foreach'</h2>";
// Percorrendo o array e imprimindo os dados
foreach( $_POST as $dado) {
   print "=> $dado <br>"; 
}
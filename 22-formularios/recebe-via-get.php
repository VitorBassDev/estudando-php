<!-- 
    Estudando PHP
    
    Códigos comentados por Marcelo Pereira
    https://github.com/marcelopoars
    https://marcelopoars.github.io/
 -->

 
<?php

/*
   Este arquivo "recebe-via-get.php" irá coletar os dados enviados
   pelo formulário

   Neste caso os dados são enviados via URL
   Os dados serão expostos na barra de endereços do navegador
*/


// Vamos utilizar a superglobal $_GET
$nome = $_GET['nome'];
$email = $_GET['email'];
$telefone = $_GET['telefone'];

print "<h1>ATENÇÃO: dê uma olhada na barra de endereços do seu navegador</h1>";

print "<br>";

print '<h2>Dados armazenados na superglobal <strong>$_GET</strong></h2>';
var_dump($_GET);

print "<hr>";
print "<h2>Recebendo dados via GET</h2>";
print "Seu nome é:
   <h3>$nome</h3>
   Seu email é:
   <h3>$email</h3>
   Seu telefone é:
   <h3>$telefone</h3>";

print "<hr>";
print "<h2>Percorrendo o array com 'foreach'</h2>";
// Percorrendo o array e imprimindo os dados
foreach( $_GET as $dado) {
   print "=> $dado <br>"; 
}






// ****************************************************

// Exemplo 02 - Recebendo dados via link
// Vamos utilizar a superglobal $_GET
// Aqui atribuimos cada parâmetro passados via link na página "index.php"
// print "Olá ".$_GET['nome']." ".$_GET['sobrenome']."! Sua cidade é:  ".$_GET['cidade'];

// print "<br><hr><br>";
// var_dump($_GET);

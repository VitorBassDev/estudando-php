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
print "<h2>Tente adicionar mais dados na ULR.</h2>";
print "<p>Depois do número do telefone adicione: <strong>&cidade=Porto+Alegre</strong> de depois clique em ENTER.</p>";

print "<br>";

print '<h2>Dados armazenados na superglobal <strong>$_GET</strong></h2>';
var_dump($_GET);

print "<hr>";
print "<h2>Percorrendo o array com 'foreach'</h2>";
// Percorrendo o array e imprimindo os dados
foreach( $_GET as $dado) {
   print "=> $dado <br>"; 
}
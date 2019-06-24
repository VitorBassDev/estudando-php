<?php
// Conexão com banco de dados
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'login';

$connect = mysqli_connect($servername, $username, $password, $db_name);

// Verifica se houve erro
if(mysqli_connect_error()):
    print 'Erro na conexão: '.mysqli_connect_error();
endif;

?>
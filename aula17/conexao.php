<?php

$host = "127.0.0.1";
$port = "3306";
$user = "root";
$password = "";
$database = "db_catalogo_3infoa";

//Faz a conexão do PHP com o MYSQL
$conexao = new mysqli($host, $user, $password, $database, $port);

//Verifica se houve um erro ao realizar a conexão
if($conexao->connect_error){
    echo "Foi encontrado o erro : " .
                        $conexao->connect_error;
    die();
}
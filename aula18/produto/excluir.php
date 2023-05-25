<?php

require_once "../conexao.php";

//Verifica se foi enviafo o param id pela URL
if(isset($_GET['id'])){

//Pega o valor do id que foi enviado pela URL
$id = $_GET['id'];

//String com o comando SQL para ser executado no DB
$sql = "DELETE FROM `produto` WHERE  `idproduto`= ? ;";
echo $sql;

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//Adiciona os valores nos parâmetros
$comando->bind_param("i", $id);

//Executa o SQL - Comando no Banco de Dados
$comando->execute();

//Abre o arquivo form.php
header("Location: index.php");
}
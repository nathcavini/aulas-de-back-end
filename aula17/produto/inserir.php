<?php

require_once "../conexao.php";

$nome =      $_POST["nome"];
$descricao = $_POST["descricao"];
$preco =     $_POST["preco"];

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`, `foto`) VALUES ('$nome', '$descricao', '$preco','sem foto.png');";
echo $sql;

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->multi_query($sql);

//Adiciona os valores nos parâmetros
//$comando->bind_param("ssds", "a","b",1,"c");

//Executa o SQL - Comando no Banco de Dados
//$comando->execute();

//Abre o arquivo form.php
//header("Location: form.php");
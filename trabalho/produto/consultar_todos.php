<?php

require_once "conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `produto` where categoria like ?";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);
$categoria = $_GET['categoria'] ??"";
$categoria = "%$categoria%";

$comando->bind_param("s", $categoria);

//Executa o SQL - Comando no Banco de Dados
$comando->execute();

//Pegar o resultado da consulta
$resultado = $comando->get_result();

//Cria um vetor vazio
$produtos = [];

//Pega todas as linhas de resultado
while($produto = $resultado->fetch_assoc()){
    //adiciona o produto (linha do resultado) no vetor
    $produtos[] = $produto;
}
<?php

require_once "../conexao.php";

//Verifica se foi enviafo o param id pela URL
if(isset($_GET['id'])){

//Pega o valor do id que foi enviado pela URL
$id = $_GET['id'];

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `usuario` WHERE  `idusuario`= ? ;";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//Adiciona os valores nos parâmetros
$comando->bind_param("i", $id);

//Executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();

//pegar a primeira linha de resultado
$usuario = $resultado->fetch_assoc();

}
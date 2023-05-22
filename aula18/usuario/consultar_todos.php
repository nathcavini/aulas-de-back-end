<?php

require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `usuario` ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//Executa o SQL - Comando no Banco de Dados
$comando->execute();

//Pegar o resultado da consulta
$resultado = $comando->get_result();

//Cria um vetor vazio
$usuarios = [];

//Pega todas as linhas de resultado
while($usuario = $resultado->fetch_assoc()){
    //adiciona o produto (linha do resultado) no vetor
    $usuarios[] = $usuario;
}
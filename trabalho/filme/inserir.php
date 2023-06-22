<?php

require_once "../conexao.php";

if(isset($_POST["titulo"]) && isset($_POST["diretor"]) 
           && isset($_POST["ano"]) && isset($_POST["genero"]))
{

//inclui o arquivo para salvar a foto do upload
require_once "salvar_foto.php";

$titulo = $_POST["titulo"];
$diretor = $_POST["diretor"];
$ano = $_POST["ano"];
$genero = $_POST["genero"];
$foto = $nome_arquivo;

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `filmes`(`titulo`, `diretor`, `ano`, `genero`, `foto`) VALUES (?, ?, ?, ?, ?);";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssiss", $titulo, $diretor, $ano, $genero, $foto);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");


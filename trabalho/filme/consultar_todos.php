<?php

//Importa o arquivo para a conexão com o BD
require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM `filmes` where genero like ?";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//Pega o valor genero enviado pela URL e adiciona na variável
$genero = $_GET['genero'] ??"";
$genero = "%$genero%";

//Adicio os valores no parâmetro ?
$comando->bind_param("s", $genero);

//Executa o SQL - Comando no Banco de Dados
$comando->execute();

//Pegar o resultado da consulta
$resultado = $comando->get_result();

//Cria um vetor vazio
$filmes = [];

//Pega todas as linhas de resultado
while($filme = $resultado->fetch_assoc()){
    //adiciona o filme (linha do resultado) no vetor
    $filmes[] = $filme;
}
<?php

    //Importa o arquivo para a conexão com o BD
    require_once "../conexao.php";
    require_once "salvar_foto.php";

    $idfilme = $_POST["idfilme"];
    $titulo = $_POST["titulo"];
    $diretor = $_POST["diretor"];
    $ano = $_POST["ano"];
    $genero = $_POST["genero"]; 

    //String com o comando sql para ser executado no DB
    $sql = "UPDATE filmes SET `titulo`= ?, `diretor`= ?, `ano`= ?, `genero`= ? WHERE `idfilme` = ? ";

    //Prepara o sql para ser executado no banco de dados
    $comando = $conexao->prepare($sql);
 
    //Adiciona valores nos parametros
    $comando->bind_param("ssisi", $titulo, $diretor, $ano, $genero, $idfilme);

    //Executa o sql - comando do banco de dados
    $comando->execute();

    //Volta para o index do controle de filmes
    header("location: index.php");
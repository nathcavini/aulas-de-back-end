<?php require_once "../controla_sessao/controla.php"; ?>
<?php

    require_once "../conexao.php";

    if(isset($_POST['nome']) && isset($_POST['descricao']) && isset($_POST['preco']))
    {
    $id =        $_POST["id"];
    $nome =      $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco =     $_POST["preco"];
    $foto = "semfoto.png"; 
 

    //String com o comenado sql para ser executado o DB
    $sql = "UPDATE produto SET `nome`= ?, `descricao`= ?, `preco`= ? `foto`= ? WHERE `idproduto` = ? ";

    //Prepara o sql para ser executado no banco de dados
    $comando = $conexao->prepare($sql);
 
    //Adiciona valores nos parametros
    $comando->bind_param("ssdsi", $nome, $descricao, $preco, $foto, $id);

    //Executa o sql - comando do banco de dados
    $comando->execute();
};
    //Abre o arquivo form.php
    header("location: index.php");
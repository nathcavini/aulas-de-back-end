<?php
    /*
 para fazer requisições é usado o $_GET (para pegar arquivos); exemplo:
    http://localhost/3infoa/nathalia/aula12/get/exemplo_get.php "?numero1=10&numero2=200"
    o ? é usado para criar variavel e o & utiliza-se para adicionar mais variaveis

    para fazer a utilização do $_GET

    $resultado = $_GET["numero1"] + $_GET["numero2"];
 echo "O resultado da some é $resultado"
*/
    
    $resultado = $_GET['numero1'] + $_GET['numero2'];
    echo "O resultado da soma é $resultado";
?>


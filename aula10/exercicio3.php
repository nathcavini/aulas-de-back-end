<h2>Exercício 3</h2>

<?php

    $aluno1 = [
        "nome" => "Poliana",
        "nota1" => 7,
        "nota2" => 9
    ];

    $aluno2 = [
        "nome" => "Murilo",
        "nota1" => 8,
        "nota2" => 5
    ];

    $aluno3 = [
        "nome" => "Andre",
        "nota1" => 6,
        "nota2" => 7
    ];

    $dados = [$aluno1, $aluno2, $aluno3];

    for($i=0; $i<=2; $i++){
        foreach($dados[$i] as $key =>$value){
            echo $value . " | ";
        }
        echo "<br>";
    }
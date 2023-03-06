<h2>Exercício 1</h2>
<p>
    Crie um vetor, como representado abaixo:
    <pre>
        +---------+
        |Murilo   | 
        +---------+
        |4        |
        +---------+
        |3        |
        +---------+
    </pre>
    <p>
        Após calcule a média das posições 1 e 2
        do vetor e armazene o resultado na posição 3.
    </p>
    <p>
        Utilize uma estrutura de condição verificar se a média,
        armazenada na posição 3 é maior ou igual a 6, se for
        armazena na posição 4 do vetor a situação "Aprovado",
        caso contrário armazene "reprovado".
    </p>
    <pre>
        +---------+
        |Murilo   | 
        +---------+
        |4        |
        +---------+
        |3        |
        +---------+
        |Reprovado|
        +---------+
    </pre>
    <p>
        Imprima o vetor utilizando o comando var_dump
    </p>
    
    <?php
    $notas = [];
    $notas[0] = "Murilo";
    $notas[1] = 4;
    $notas[2] = 3;
    $media = ($notas[1] + $notas[2]) / 2;
    $notas[] = $media;
    
    if($notas[3] >= 6){
        $notas[4] = "aprovado";
     }else{
         $notas[] = "reprovado";
     }        
    var_dump($notas);
    ?>
</p>
<h2>Vetores</h2>

<p>
    São estruturas de armazenamento compostas heterogêneas,
    que podem ser indexadas numericamente ou textualmente.
</p>

<?php
    //exemplo variável simples
    $nota = 6;
    $nota = 3;
    echo $nota. "<br>";

    //exemplo vetor indexado numericamente 
    $notas = [];
    $notas[] = 6;
    $notas[] = 3;
    //var_dump($notas);
    //imprimir só a primeira nota
    echo ($notas[0] + $notas[1]) / 2 ;

    //vetores com índice textual
    $notas = []; //cria um vetor vazio
    $notas["debora"] = 7;
    $notas["murilo"] = 7.8;
    $notas["poliana"] = 9;
    echo "<p></p>";
    echo "A Poliana tirou nota " . $notas["poliana"];
?>

<?php
  $notas = [2, 4, 8, 10, 12, 14, 16];
  for ($i = 0; $i < count($notas); $i++) {
    echo "Nota " . ($i+1) . ": " . $notas[$i] . "<br>";
  }
?>

<?php
  $notas = [2, 4, 8, 10, 12, 14, 16];
  $soma = 0;
  for ($i = 0; $i < count($notas); $i++) {
    $soma += $notas[$i];
  }
  echo "A soma das notas é: " . $soma;
?>
<h2>Exercício 2</h2>

<p>
    Crie um vetor com os nomes, conforme exemplo abaixo:
        <pre>
          --------- 
       0 |Murilo   | 
          --------- 
       1 |Poliana  |
          --------- 
       2 |Dalva    |
          --------- 
       3 |Lavinia  |
          --------- 
       4 |Kaua     |
          --------- 
    </pre>
</p>
<p>
    Imprima os nomes do vetor em formato de lista ordenada, utilizando um laço de repetição:
</p>

<?php
    $nomes = ["Murilo", "Poliana", "Dalva", "Lavinia", "Kaua"];
    
      echo "<ol>";
      for($contador=0; $contador<=4; $contador++){
      echo "<li> $nomes[$contador] </li>";
    }
      echo "</ol>";
?>
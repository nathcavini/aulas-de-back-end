<h2>Exercício 2</h2>

<p>
<pre>
            +--------+
    nome    |Maria   |
            +--------+
    idade   |17      |
            +--------+
    altura  |1.65    |
            +--------+
</pre>
</p>

<?php
    $nomes = [];
    $nomes["nome"] = "Maria";
    $nomes["idade"] = 17;
    $nomes["altura"] = 1.65;

    foreach($nomes as $key => $values){
        echo $values . "<br>";
    }
?>
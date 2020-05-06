<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula02</title>
</head>
<body>
    <h1> Loops e Funções</h1>

    <p> Loops - For</p>

    Crie um loop que exiba os números de 1 a 10 utilizando a estrutura For. <br>

    <?php
        for ($i=1; $i <= 10; $i++) {
            echo $i . "<br>";
        }
    
    ?>
        Crie um loop que exiba os números de 10 a 1 utilizando a estrutura For. <br>
    <?php
        for ($i=10; $i >= 1; $i--) {
            echo $i . "<br>";
        }
    ?>

<hr>

<?php
for ($i=1; $i <= 10; $i++) {
    if($i % 2 == 0) {
    echo $i . "<br>";
}
}
?>

<?php

for($i=1; $i<=10; $i++) {
    $resultado = $i * 5;
    echo "5 x  $i = $resultado <br>";
}
?>


<hr>
<h1> Loops - percorrendo ARRAYS</h1>

Este com style:
<p style="padding: 5px; background-color:#f5f5f5; border-radius: 10px; color:blue; line-height:20px; font-size:16px;">
$animais = [ "Gato", "Cachorro", "Leão", "Garafa"];
</p>

<?php
$animais = [ "Gato", "Cachorro", "Leão", "Garafa"];
?>
<p> O COUNT retorna em numeros a quantidade de elementos do Array. Neste caso: 4 elementos.
<br>
<?php
    echo count($animais);
?>

<hr>
<br>
<p>Lista de animais percorrida com o FOR.</p>
<?php
for ($i=0; $i < count($animais); $i++) { 
    echo $animais[$i] . "<br>";
}
?>

<hr>

<p>Percorra o Array de animais utilizando WHILE</p>


Este percorrendo com COUNT no WHILE:
<br>

<?php
$i = 0;
while ($i < count($animais)) { 
    echo $animais[$i] . "<br>";
    $i++;
}
?>

<hr>
<p>Percorrendo array com DO WHILE <p>

<?php

$i = 0;
do {
    echo $animais[$i] . "<br>";
    $i++;
} while ($i < count($animais));
?>
<hr>





<p> FOREACH - percorre somente Arrays e objetos. Não poderiamos
    fazer uma tabuada, com Foreach e i++. o Foreach perecisa de um array para começas a apercorrer<p>
Este com style:
<p style="padding: 5px; background-color:#f5f5f5; border-radius: 10px; color:blue; line-height:20px; font-size:16px;">
$animais = [ "Gato", "Cachorro", "Leão", "Garafa"];
</p>

<p> Nesta sintaxe mostra a posição e o indice.</p>
<?php

foreach ($animais as $posicao => $indice) {
    echo "Posição: " . $posicao . " Índice: " . $indice . "<br>";
    }
?>

 <hr>
<p> Nesta sintaxe mostra apenas o indice.</p>
<?php

foreach ($animais as $animal) {
    echo $animal . "<br>";
    }
?>


    
</body>
</html>
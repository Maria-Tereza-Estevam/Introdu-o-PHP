<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula01</title>
</head>
<body>

<?php 
$titulo="Primeira aula PHP";
?>
<h1> 

<?php
echo $titulo;
?>

<h5> Exibindo conteúdo PHP dentro  do html</h5>
<hr>
<hr>
<hr>


<?php 
  
  $idadeEleitor = 20;
  if ($idadeEleitor >= 18) {
      echo "Deve votar";
  } else {
        echo "Não vota";
      }
  
?>

<hr>

<?php 
    $idadeEleitoral = 10;

    if ($idadeEleitoral >= 16 && $idadeEleitoral < 18 || $idadeEleitoral > 70) {
        echo "Voto facultativo";
    } else if ($idadeEleitoral >= 18 && $idadeEleitoral <= 70) { 
        echo "Voto obrigatório";
    } else {
        echo "Não vota";
    }
?>

<hr>
<br>
<br>
<?php 
$titulo02=" Segundo tema da aula: FUNÇÃO";
?>

<h1> 
<?php
echo $titulo02;
?>
</h1>
<h5> Criando função</h5>
<hr>
<hr>
<hr>

<?php
function podeVotar ($idadeDeVoto) {
    if($idadeDeVoto >=16 && $idadeDeVoto < 18 || $idadeDeVoto > 70) {
    echo "Voto facultativo";
    }  else if ($idadeDeVoto > 18 && $idadeDeVoto <= 70) {
        echo "Voto obrigatório";
    } else {
        echo "Não vota";
    }
}
?>
<?php podeVotar (17);?>
<hr>
<p> SWITCH CASE</p>

<?php 
 
 function validaNumero($i) {

    switch ($i) {
        case 0:
            return "igual 0";
            break;
        case 1:
            return "igual 1";
            break;
        case 2:
            return "igual 2";
            break;
    }
 }
?>
<br>
<?php echo validaNumero(1); ?>


<?php 
 function validaGenero($x) {

    switch ($x) {
        case 'masculino':
            return "Masculino";
            break;
        case 'feminino':
            return "Femenino";
            break;
        case 'outros':
            return 'Outros';
            break;
    }
 }
?>

<br>
<?php echo validaGenero('feminino'); ?>

<hr>
<hr>


<h1> Arrays </h1>
<p> Array simples</p>
<hr>
<br>
<br>

<?php

$animais = [ "leão", "Girafa", "Cachorro", "Gato"];

echo "<pre>";
var_dump ($animais);
echo "</pre>";
?>
<hr>
<br>
<br>
<p> Array associativo</p>
<br>
<br>

<?php
    $usuario = [
        "nome" => "victor",
        "email" => "vtores@digitalhouse.com",
        "senha" => "123456"
    ];

echo "<pre>";
    var_dump($usuario);
echo "</pre>";

echo " O nome do usuário é " . $usuario["nome"];
?>

<hr>
<br>
<br>
<p> Array de array</p>
<br>
<br>

<?php
$listaDeUsuarios = [
    "usuario1" => [
        "nome" => "victor",
        "email" => "vtores@digitalhouse.com",
        "senha" => "123456"
    ],

    "usuario2" => [
        "nome" => "Marcelo",
        "email" => "mdiament@dh.com",
        "senha" => "234567"
    ]
];


    var_dump($listaDeUsuarios["usuario1"]);


    echo "Nome do usuario1 é: " . $listaDeUsuarios["usuario1"]["nome"] . "Nome do usuario2 é: " . $listaDeUsuarios["usuario2"]["nome"];

?>

<hr>
<p> Array - impresso com a Tag  "pre".
    <?php

    $listaDeUsuarios = [
        "usuario1" => [
            "nome" => "victor",
            "email" => "vtores@digitalhouse.com",
            "senha" => "123456"
        ],   
        "usuario2" => [
            "nome" => "Marcelo",
            "email" => "mdiament@dh.com",
            "senha" => "234567"
        ]
    ];

    /*
    foreach ($listaDeUsuarios as $key => $value) {
        echo "Posição: " . $key . "Índice: " . $value . "<br>";
    }*/
    
    echo "<pre>";
        var_dump($listaDeUsuarios["usuario1"]);
    echo "</pre>";
    

?>
</body>
</html>
<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Operadores</h1><br>";
echo $title;

$nome = '<h5>Operadores Aritméticos</h5>
Adição = $r = $a + $b <br>
Subtração = $r = $a - $b <br>
Multiplicação = $r = $a * $b <br>
Divisão = $r = $a / $b <br>
Módulo = $r = $a % $b <br><br>

EXEMPLOS: <br>
$n1 = 3;<br>
$n2 = 2;<br>

$s = $n1 + $n2;<br>

echo "A soma entre $n1 e $n2 é igual a $s"; <br><br>';

echo $nome;

$n1 = 3;
$n2 = 2;

$s = $n1 + $n2;

echo "O RESULTADO MOSTRADO NA TELA: <br>
A soma entre $n1 e $n2 é igual a $s". "<br>";

$n1 = 3;
$n2 = 2;
$m = ($n1 + $n2) / 2;

echo "<br/>A soma vale ". ($n1 + $n2) ;
echo "<br/>A subtração vale ". ($n1 - $n2);
echo "<br/>A Multiplicação vale ". ($n1 * $n2);
echo "<br/>A Divisão vale ". ($n1 / $n2);
echo "<br/>O Módulo vale ". ($n1 % $n2);
echo "<br/> A media vale $m";

include_once "./componentes/footer.php";
?>
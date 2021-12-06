<?php
include ("../model/url.php");
include ("../model/calculos.php");
//print_r($_POST);

#alocando as variaveis
$diagonalmaior = $_POST['diagonal_maior'];
$diagonalmenor = $_POST['diagonal_menor'];

#instanciando a classe Calculos
$dados = new Calculos();

#chamando um método da classe calculo do triangulo
$resultado = $dados->Losango($diagonalmaior, $diagonalmenor);

//echo $resultado;

#redirecionando o resultado ppara o formulario de calculo via GET
header('Location:'.$view.'losango.php?area='.$resultado);

?>

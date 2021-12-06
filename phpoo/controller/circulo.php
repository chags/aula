<?php
include ("../model/url.php");
include ("../model/calculos.php");
//print_r($_POST);

#alocando as variaveis
$raio = $_POST["raio"];

#instanciando a classe Calculos
$dados = new Calculos();

#chamando um método da classe calculo do triangulo
$resultado = $dados->Circulo($raio);

//echo $resultado;

#redirecionando o resultado ppara o formulario de calculo via GET
header('Location:'.$view.'circulo.php?area='.$resultado);

?>

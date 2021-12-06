<?php
include ("../model/url.php");
include ("../model/calculos.php");
//print_r($_POST);

#alocando as variaveis
$base = $_POST["base_quadrado"];
$altura = $_POST['altura_quadrado'];

#instanciando a classe Calculos
$dados = new Calculos();

#chamando um método da classe calculo do triangulo
$resultado = $dados->Quadrado($base, $altura);

//echo $resultado;

#redirecionando o resultado ppara o formulario de calculo via GET
header('Location:'.$view.'quadrado.php?area='.$resultado);

?>

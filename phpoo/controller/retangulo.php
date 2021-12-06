<?php
include ("../model/url.php");
include ("../model/calculos.php");
//print_r($_POST);

#alocando as variaveis
$base = $_POST['base_retangulo'];
$altura = $_POST['altura_retangulo'];

#instanciando a classe Calculos
$dados = new Calculos();

#chamando um método da classe calculo do triangulo
$resultado = $dados->Retangulo($base, $altura);

//echo $resultado;

#redirecionando o resultado ppara o formulario de calculo via GET
header('Location:'.$view.'retangulo.php?area='.$resultado);

?>

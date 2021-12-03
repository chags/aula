<?php
include ("../model/url.php");
include ("../model/calculos.php");
//print_r($_POST);

#alocando as variaveis
$altura = $_POST["altura_triangulo"];
$base = $_POST['base_triangulo'];

#instanciando a classe Calculos
$dados = new Calculos();

#chamando um método da classe calculo do triangulo
$resultado = $dados->Triangulo($altura, $base);

//echo $resultado;

#redirecionando o resultado ppara o formulario de calculo via GET
header('Location:'.$view.'triangulo.php?area='.$resultado);

?>

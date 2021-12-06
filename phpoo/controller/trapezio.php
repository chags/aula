<?php
include ("../model/url.php");
include ("../model/calculos.php");
//print_r($_POST);

#alocando as variaveis
$basemaior = $_POST["base_maior"];
$basemenor = $_POST['base_menor'];
$alturatrapezio = $_POST['altura_trapezio'];


#instanciando a classe Calculos
$dados = new Calculos();

#chamando um método da classe calculo do triangulo
$resultado = $dados->Trapezio($basemaior, $basemenor, $alturatrapezio);

//echo $resultado;

#redirecionando o resultado ppara o formulario de calculo via GET
header('Location:'.$view.'trapezio.php?area='.$resultado);

?>

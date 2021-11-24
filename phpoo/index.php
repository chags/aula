<?php
include ("model/Usuario.php");
echo "Olá, mundo! <br>";


$data = new Usuario();

$usuario = $data->selecionarUsuario();

$usuario1 = $data->CadastrarUsuario();

$calculo = $data->Calcular();

$valor = 5785;


$dizimo = $data->Dizimo($valor);

//echo $usuario;
//echo $usuario1;
//echo $calculo;

//echo 'meu salario é: '. $valor ."<br>";
//echo 'o valor do meu dizimo é: ' . $dizimo['total'] . '<br>';
//echo 'o  valor liquido: ......'.$dizimo['resto']. '<br>';

<?php
include ("../model/calculos.php");
echo "Olá, mundo! <br>";


$data = new Usuario();

$usuario = $data->selecionarUsuario();

$usuario1 = $data->CadastrarUsuario();

$calculo = $data->Calcular();

$valor = 5785;


$dizimo = $data->Dizimo($valor);


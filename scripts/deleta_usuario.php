<?php
include_once ("funcoes.php");

//print_r($_GET);

$tabela = 'usuario';
$campos = $_POST;

Delete($tabela, $campos);


?>
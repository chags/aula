<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Array</h1><br>";
echo $title;

$nome ='Array é um tipo de dado, assim como integer, float, string ou boolean.
Contudo, um array pode armazenar mais de um valor, relacionando-o a uma chave.
No PHP, um mesmo array pode conter diferentes tipos de dados, incluindo novos arrays.<br><br>

$array = ($)array(1, 2, 3, 4);<br>
echo $array[0];<br>
echo $array[1];<br>
echo $array[2];<br>
echo $array[3];<br><br>';

echo $nome. "RESULTADO NA TELA: <br>";

$itens = array(['banana' =>array (20.20 ,10, true), 'maça', 'laranja'],['arroz', 'feijão', 'açúcar']);

echo '<pre>';
var_dump($itens);
//print_r($itens);
echo '</pre>';-

#fazer um array de dados com os familiares e seus dados pessoais

include_once "./componentes/footer.php";
?>
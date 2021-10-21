<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Foreach</h1><br>";
echo $title;

$nome = 'O FOREACH é uma simplificação do operador FOR para se trabalhar em coleções de dados,
ou seja, vetores e matrizes. Ele permite acessar cada elemento individualmente iterando sobre 
toda a coleção e sem a necessidade de informação de índices.
Por exemplo, supondo que fosse preciso percorrer um vetor com alguns elementos com o FOR.
Seria necessário utilizar um contador para servir também de índice para acessar cada elemento,
conforme a listagem a seguir. <br><br>

DEMONSTRAÇÃO: <br><br>

$vetor = array(1, 2, 3, 4, 5);<br>
for($i = 0; $i < 5; $i++)<br>
{
  $item = $vetor[$i];<br>
echo $item." "; <br>
}';

echo $nome. "<br><br>". "RESULTADO = ";

$vetor = array(1, 2, 3, 4, 5);
for($i = 0; $i < 5; $i++)
{
  $item = $vetor[$i];
echo $item." ";
}


include_once "./componentes/footer.php";
?>
<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>While</h1><br>";
echo $title;

$nome = "O propósito da declaração while é simples. Ele dirá ao PHP para executar as
declarações aninhadas repetidamente, enquanto a expressão do while forem avaliadas como true . ... 
Entretanto, se a expressão do while for avaliada como false desde o início, as declarações aninhadas 
não serão executadas nenhuma vez..";

echo $nome. "<br><br>";

include_once "./componentes/footer.php";
?>
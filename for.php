<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>For</h1><br>";
echo $title;

$nome = "O for é a estrutura de repetição do PHP que utilizamos quando sabemos a quantidade de repetições que devem ser executadas.<br><br>";
echo $nome;

for ($i=0; $i < 10; $i++) {
    echo $i."<br>";
}

include_once "./componentes/footer.php";
?>
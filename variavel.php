<?php
include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Variaveis</h1><br>";
echo $title;
#ESte é um comentario
// este é outro
/*
phpinfo();
********/

$exp = "<h5>TIPOS DE VARIAVES</h5>
        Inteiro (int), (integer) <- typecast<br>
        Real (real), (float), (double)<br>
        Caractere (string)<br>
        Lógico (true = 1, false = vazio) <br>";

echo $exp. "<br>";

# criando uma variavel
$nome = "Junior";
$idade = 30;
$altura = "1.70";

# mostrando o conteudo de uma variavel
echo $nome." tem ".$idade." e altura ".$altura;


include_once "./componentes/footer.php";
?>
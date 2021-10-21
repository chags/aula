<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Estrutura condicional IF, ELSE IF, ELSE</h1><br>";
echo $title;

$nome = '<h5>As linguagens de programação tem diversas estruturas básicas que as compõem. Falamos 
já sobre estruturas de laços, funções, variáveis e arrays. Agora falaremos sobre estruturas condicionais. 
Estas são parte fundamental em qualquer linguagem de programação, em termos básicos, as condições 
que guiam por onde o código deve prosseguir.  
Uma estrutura condicional é baseada em binário, ou seja, como programação é uma ciência exata,
existem apenas duas respostas para uma condição, que são: VERDADEIRO OU FALSO.</h5><br>

#sintaxe <br>
$a = 8;<br>
if($a == 8) <br>
    echo "verdadeiro"; <br>
else <br>
{ <br>
    echo "falso"; <br>
}; <br><br>';


echo $nome;

#sintaxe
$a = 8;
if($a == 8)
    echo "RESULTADO A SER MOSTRADO: verdadeiro";
else
{
    echo "RESULTADO A SER MOSTRADO: falso";
};



include_once "./componentes/footer.php";
?>
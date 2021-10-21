<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Bem Vindo ao site explicativo PHP</h1><br>";
echo $title;

$nome = '<h5>O que é PHP e para que serve?</h5><br>
O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor ) é uma linguagem de script 
open source de uso geral, muito utilizada, e especialmente adequada para o desenvolvimento 
web e que pode ser embutida dentro do HTML. <br><br>

<h5>Para que é usado o PHP?</h5> <br>
O PHP pode ser utilizado na maioria dos sistemas operacionais, incluindo Linux, várias 
variantes do Unix (como HP-UX, Solaris e OpenBSD), Microsoft Windows, macOS, RISC OS e 
provavelmente outros. O PHP também tem suporte à maioria dos servidores web atualmente. 
Isso inclui o Apache, o IIS e muitos outros.<br><br>

<h5>Como funciona a linguagem PHP?</h5><br>
A princípio, a linguagem PHP é uma linguagem livre, sem taxas e custos na instalação 
de sistemas operacionais, possibilitando a interação por meio de dados e aplicações 
presentes no servidor. A linguagem de scripts também é usada em união com o HTML, 
a linguagem de marcação utilizada na construção de páginas Web. <br><br>

<h5>Onde e como a linguagem PHP é mais utilizada?</h5><br>
Usado majoritariamente em aplicações web, a linguagem PHP é útil para incluir funções
a uma página que o HTML não é capaz de suportar. A linguagem também é utilizada para
integração entre informações de sua página e banco de dados MySQL, por exemplo. 
Sites como o Yahoo e a versão web do Facebook são mantidas em PHP.';

echo $nome. "<br>";

include_once "./componentes/footer.php";
?>
<?php
include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Operadores matemáticos PHP</h1><br>";
echo $title;

#TagAdição
$nome = 'Fazer cálculos e uma função rotineira na programação, em muitos sistemas precisamos fazer cálculos de idade, porcentagem e etc.
Neste post vamos aprender a como fazer tais cálculos e os operadores matemáticos mais usados no PHP.<br><br>
<h4>Somando, subtração, divisão e multiplicação</h4>
As quatro operações básicas da nossa matemática são facilmente aplicadas, veja o exemplo:<br><br>

<h4>Somando</h4>
Variáveis para o calculo <br>
 $a = 10; <br>
 $b = 20; <br><br>

 Somando as variaveis <br>
 $resultado = $a + $b; <br>

 echo $resultado; <br><br>';

# variaveis com numeros
$numero1 = 10;
$numero2 = 20;

#soma
$soma = $numero1 + $numero2;

echo $nome. "RESULTADO: ". $soma. "<br><br>";


#TagSubtração
$nome1 = '<h4>Subtraindo</h4>

Variáveis para o calculo <br>
 $a = 10; <br>
 $b = 20; <br><br>

Subtraindo as variaveis <br>
 $resultado = $a - $b; <br>

 echo $resultado; <br><br>';

#subtracao
$subt = $numero2 - $numero1;

echo $nome1. "RESULTADO: ". $subt. "<br><br>";


#TagDivisão
$nome2 = '<h4>Dividindo</h4>

Variáveis para o calculo <br>
 $a = 10; <br>
 $b = 20; <br><br>

Subtraindo as variaveis <br>
 $resultado = $a / $b; <br>

 echo $resultado; <br><br>';

#divisao
$divisao = $numero2 / $numero1;

echo $nome2. "RESULTADO: ". $divisao. "<br><br>";


#TagMultiplicação

$nome3 = '<h4>Multiplicando</h4>

Variáveis para o calculo <br>
 $a = 10; <br>
 $b = 20; <br><br>

Subtraindo as variaveis <br>
 $resultado = $a * $b; <br>

 echo $resultado; <br><br>';

#multiplicando
$mult = $numero2 * $numero1;

echo $nome3. "RESULTADO: ". $mult. "<br><br>";



include_once "./componentes/footer.php";
?>
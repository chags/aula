<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Função</h1><br>";
echo $title;

    function mensagem(){
        echo "Olá Mundo! <br>";
    }
    //invocando a função:
    mensagem();

    function soma($n1, $n2){
        $result = $n1 + $n2;
        echo "<hr/>Soma de $n1 com $n2 = $result <hr/>";
    }

    soma(3, 7);
    soma(5, 20);

    function soma2 ($n1, $n2) {
        $result = $n1 + $n2;
        return $result;
    }

    $so = soma2(10, 5);
    echo "<hr/> RESULTADO = $so <hr/>";

    
    #funções

    
    function olaria($areia, $agua){
        $barro = $areia + $agua;
        $tijolo = $barro / 4;
        return  $tijolo;

    }

    $areia = 50;
    $agua = 50;
    $resultado = olaria($areia, $agua);

    echo "<br><hr>";
    echo "A olaria fez ". $resultado . " Tijolos";

    $nome = "Eu%te%amo";
    $pl = str_replace("e","E", $nome);
    
    echo "<br><hr>";
    echo $pl;
    echo "<br><hr>";
    #funcão para calcular a area de retangulo
    # retangulo = base * altura

    echo "<br><hr>";
    #funcão para calcular a area de area de um triangulo retangulo




include_once "./componentes/footer.php";
?>
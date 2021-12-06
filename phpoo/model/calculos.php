<?php

class Calculos{

    #calculando a area do triangulo
    public function Triangulo($altura, $base){
        $area = ($altura * $base)/2;
        return $area;
    }

    public function Quadrado($base, $altura){
        $area = $base * $altura;
        return $area;
    }

    public function Trapezio($basemaior, $basemenor, $alturatrapezio){
        $area = ($basemaior + $basemenor) * $alturatrapezio;
        return $area;
    }

    public function Losango($diagonalmaior, $diagonalmenor){
        $area = ($diagonalmaior * $diagonalmenor) / 2;
        return $area;
    }

    public function Circulo($raio){
        $area = pow($raio, 2) * M_PI;
        return $area;
    }

    public function Retangulo($base, $altura){
        $area = $base * $altura;
        return $area;
    }
}

?>
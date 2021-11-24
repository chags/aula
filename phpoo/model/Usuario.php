<?php

class Usuario{

    public function CadastrarUsuario(){
        $us = "Usuario cadastrado com sucesso!";
        return $us;
    }

    public function selecionarUsuario(){
        $user = "junior!";
        return $user;
    }

    public function Calcular(){
        $soma = 10+10;
        return $soma;
    }

    public function Dizimo($valor){
       // $n1 = 0.1;
        $total = $valor * 0.1;
        $resto = $valor - $total;
        $calc = ['total' => $total, 'resto' => $resto];
        return  $calc;
    }
}

?>
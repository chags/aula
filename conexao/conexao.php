<?php

//Criar as constantes com as credencias de acesso ao banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'aula');

//Criar a conexão com banco de dados usando o PDO e a porta do banco de dados
//Utilizar o Try/Catch para verificar a conexão.
try {
    $conn = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    echo "Conexão com banco de dados realizada com sucesso.";
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
}
<?php

include_once("../conexao/conexao.php");


try {
    # faz a conexao com o banco de dados
    $conexao = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    # organizando os dado para enviar para o banco
    $usuario = array(
        'usuario_nome'=> $_POST['nome'],
        'usuario_email'=> $_POST['email'],
        'usuario_senha'=> md5($_POST['senha']),
        'usuario_endereco'=> $_POST['endereco'],
        'usuario_cidade'=> $_POST['cidade'],
        'usuario_estado'=> $_POST['estado'],
        'usuario_cep'=> $_POST['cep']
    );
    
    #inserindo dado no banco de dados
    $id = $conexao->prepare('INSERT INTO usuario (usuario_nome, usuario_email, usuario_senha, usuario_endereco, usuario_cidade, usuario_estado, usuario_cep) VALUES (:usuario_nome, :usuario_email, :usuario_senha, :usuario_endereco, :usuario_cidade, :usuario_estado, :usuario_cep)')->execute($usuario);


} catch(PDOException $e) {
    $e->getMessage();
}

header("location: ../usuarios.php?mensage='cadastro efetuado com sucesso");

die();


?>
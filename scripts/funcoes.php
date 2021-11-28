<?php

//include_once("../conexao/conexao.php");



#função para selecionar apenas um  usuario no banco
function ListaUsuario($id_usuario){

    try {

        # faz a conexao com o banco de dados
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('DBNAME', 'aula');
        $conexao = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conexao->prepare('SELECT * FROM usuario WHERE id_usuario = :id_usuario');
        $stmt->execute(['id_usuario' => $id_usuario]); 
        $user = $stmt->fetch(); 
        return $user;
    
    } catch (PDOException $e) {
        echo 'ERRO'. $e->getMessage();
    }

   
}

function UpdateUsuario(){

    try {

        $conexao = new pdo('mysql:dbname=aula;host=localhost', 'root', '');
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conexao->prepare('UPDATE usuario SET usuario_nome=:usuario_nome, usuario_email=:usuario_email, usuario_endereco=:usuario_endereco, usuario_cidade=:usuario_cidade, usuario_estado=:usuario_estado, usuario_cep=:usuario_cep WHERE id_usuario=:id_usuario');
        $stmt->execute($_POST); 
        //$user = $stmt->fetch(); 
        //return $user;
        # organizando os dado para enviar para o banco

        #inserindo dado no banco de dados
      

    } catch(PDOException $e) {
        $e->getMessage();
    }


   header("location: https://$_SERVER[HTTP_HOST]/aula/usuarios.php?mensage=cadastro atualizado com sucesso");

    die();

}    
function UpdateSenha(){

    try {
        $_POST['usuario_senha'] = md5($_POST['usuario_senha']);
        $conexao = new pdo('mysql:dbname=aula;host=localhost', 'root', '');
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conexao->prepare('UPDATE usuario SET id_usuario=:id_usuario, usuario_senha=:usuario_senha WHERE id_usuario=:id_usuario');
        $stmt->execute($_POST); 
        //$user = $stmt->fetch(); 
        //return $user;
        # organizando os dado para enviar para o banco

        #inserindo dado no banco de dados
      

    } catch(PDOException $e) {
        $e->getMessage();
    }


   header("location: https://$_SERVER[HTTP_HOST]/aula/usuarios.php?mensage=senha atualizada com sucesso");

    die();

} 

function Delete($tabela, $campos){

    try {
        //print_r($_GET);
        $conexao = new pdo('mysql:dbname=aula;host=localhost', 'root', '');
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conexao->prepare('DELETE FROM $tabela WHERE id_usuario=:id_usuario');
        $stmt->execute($campos); 
        //$user = $stmt->fetch(); 
        //return $user;
        # organizando os dado para enviar para o banco

        #inserindo dado no banco de dados
      

    } catch(PDOException $e) {
        $e->getMessage();
    }
   

   header("location: https://$_SERVER[HTTP_HOST]/aula/usuarios.php?mensage=usuario deletado com sucesso");

    die();

} 

?>
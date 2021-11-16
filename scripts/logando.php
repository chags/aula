<?php
include_once("../conexao/conexao.php");
 
$usuario_email = $_POST['email'];

try {
    # faz a conexao com o banco de dados
    $conexao = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conexao->prepare("SELECT * FROM usuario WHERE usuario_email=:usuario_email");
    $stmt->execute(['usuario_email' => $usuario_email]); 
    $user = $stmt->fetch();  

   if ($user['usuario_senha'] == $_POST['senha'] ){

        $mensage = "usuario logado com sucesso";
        header('Location: https://localhost/aula/usuarios.php?mensagem='.$mensage);
        die(); 

    }else{
        $mensage = "não foi possivel acesso tente outra vez";
        header('Location: https://localhost/aula/login.php?mensagem='.$mensage);
        die();
    }


/*     $stmt = $conexao->prepare('SELECT * FROM usuario WHERE id_usuario = :id_usuario');
    $stmt->execute(['usuario_id' => $_GET['id']]); 
    $user = $stmt->fetch(); */   


    //$data = $conexao->query("SELECT * FROM usuario")->fetchAll();
    //print_r($data). '<br>';
    // and somewhere later:
    //foreach ($data as $row) {
    //    echo $row['usuario_nome']. $row['usuario_email']. "<br />\n";
    //}




} catch (PDOException $e) {
    echo 'ERRO'. $e->getMessage();
}


?>
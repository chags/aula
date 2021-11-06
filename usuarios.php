<?php
#conectando o banco de dados
include_once("./conexao/conexao.php");

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>usuarios</h1><br>";
echo $title;

try {
    # faz a conexao com o banco de dados
    $conexao = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    $data = $conexao->query("SELECT * FROM usuario")->fetchAll();
   print_r($data). '<br>';


    //foreach ($data as $row) {
       //echo $row['usuario_nome']. $row['usuario_email']. "<br />\n";
    //}


} catch (PDOException $e) {
    echo 'ERRO'. $e->getMessage();
}
#tarefa de casa colocar todos os usuarios numa tabela usando o foreach
?>

<div class="row">
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Usuário</th>
        <th scope="col">Email</th>
        <th scope="col">Senha</th>
        <th scope="col">Endereço</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">CEP</th>
        <th scope="col">Controles  <i class="fas fa-gamepad"></i></th>        
      </tr>
    </thead>
    <tbody>

    <?php  foreach ($data as $campo): ?>
        
      <tr>
        <th scope="row"><?=$campo['id_usuario']; ?></th>
        <td><?=$campo['usuario_nome']; ?></td>
        <td><?=$campo['usuario_email']; ?></td>
        <td><?=$campo['usuario_senha']; ?></td>
        <td><?=$campo['usuario_endereco']; ?></td> 
        <td><?=$campo['usuario_cidade']; ?></td>
        <td><?=$campo['usuario_estado']; ?></td>
        <td><?=$campo['usuario_cep']; ?></td>
        <td> 
          <a class="btn btn-success" href="http://">Salvar</a>    
          <a class="btn btn-default" href="http://">Editar</a>      
          <a class="btn btn-danger" href="http://">Deletar</a>      
      </td>  
      </tr>

         
    <?php endforeach; ?>


    </tbody>
  </table>
  </div>

<?php
include_once "./componentes/footer.php";
?>
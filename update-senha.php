<?php
include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
include_once ("./scripts/funcoes.php");

$usuario = ListaUsuario($_GET['id']);

//print_r($usuario);

$title = "<h1>Editar Cadastro</h1><br>";

echo $title;
#aula de formulario
?>
<div class="container">
  <div class="row align-items-start">
    <div class="col-sm-2">
    
    </div>
    <div class="col-sm-8">
        <form method="POST" action="scripts/update_senha.php"  class="row g-3">
            <input type="hidden" name="id_usuario" value="<?=$usuario['id_usuario']; ?>">
            <div class="col-12">
                    <label for="inputAddress" class="form-label"><i class="fas fa-user-edit"></i> Nova Senha do <?=$usuario['usuario_nome']; ?> </label>
                    <input type="password" name="usuario_senha" class="form-control" id="inputAddress"  placeholder="Digite sua nova senha">
                </div>
                
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-success">Enviar</button>
                </div>
        </form>
    </div>
    <div class="col-sm-2 ">

    </div>
  </div>
</div>


<?php
include_once ("./componentes/footer.php");
?>



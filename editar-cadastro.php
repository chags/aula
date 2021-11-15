<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Editar Cadastro</h1><br>";
echo $title;
#aula de formulario
?>
<div class="container">
  <div class="row align-items-start">
    <div class="col-sm-2">
    
    </div>
    <div class="col-sm-8">
        <form method="POST" action="scripts/form.php"  class="row g-3">
            <div class="col-12">
                    <label for="inputAddress" class="form-label"><i class="fas fa-user-edit"></i> Nome</label>
                    <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Digite seu nome">
                </div>


                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label"><i class="fas fa-envelope-open-text"></i> Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label"><i class="fas fa-unlock-alt"></i> Senha</label>
                    <input type="password" name="senha" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label"><i class="fas fa-map-marked"></i> Endereço</label>
                    <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Digite seu endereço">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label"><i class="fas fa-city"></i> Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label"><i class="fas fa-flag-usa"></i> Estado</label>
                    <select id="inputState" class="form-select" name="estado" >
                    <option selected>selecionar...</option>
                    <option value="CE">Ceará</option>                
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>                
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>                
                    <option value="BA">Bahia</option>
                    <option value="AL">Alagoas</option>                
                    <option value="ES">Espírito Santo</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label"><i class="fas fa-mail-bulk"></i> CEP</label>
                    <input type="text" name="cep" class="form-control" id="inputZip">
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
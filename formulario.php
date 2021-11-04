<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Formulario de Cadastro</h1><br>";
echo $title;
#aula de formulario
?>
<div class="container">
  <div class="row align-items-start">
    <div class="col-sm-2">
    
    </div>
    <div class="col-sm-8">
        <form method="POST" action="form.php"  class="row g-3">
            <div class="col-12">
                    <label for="inputAddress" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Digite seu nome">
                </div>


                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">senha</label>
                    <input type="password" name="senha" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Endereço</label>
                    <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Digite seu endereço">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Estado</label>
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
                    <label for="inputZip" class="form-label">CEP</label>
                    <input type="text" name="cep" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
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
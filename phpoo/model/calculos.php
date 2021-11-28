<?php

include_once ("../phpoo/componentes/navbar.php");
include_once ("../phpoo/componentes/head.php");


$title = "<h1>Formulario de Cadastro</h1><br>";
echo $title;
#formulario
?>
<div class="container">
  <div class="row align-items-start">
    <div class="col-sm-2">
    
    </div>
    <div class="col-sm-8">
        <form method="POST" action="model/Usuario.php"  class="row g-3">
            <div class="col-12">
                    <label for="inputAddress" class="form-label"><i class="fas fa-user-edit"></i> Digite um valor: </label>
                    <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Digite um valor">
                </div>


                <div class="col-12">
                    <label for="inputAddress" class="form-label"><i class="fas fa-user-edit"></i> Digite outro valor valor: </label>
                    <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Digite outro valor">
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
include_once "./componentes/footer.php";
?>
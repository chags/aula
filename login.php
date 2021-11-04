<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Login</h1><br>";
echo $title;
#aula de criar pagina de login
?>
<div class="container">
    <div class="row align-items-start">
          <div class="col-sm-2">
          
          </div>
          <div class="col-sm-8">
            <form method="POST" action="scripts/logando.php">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"> Nunca compartilharemos seu e-mail com mais ninguém.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
         
          </div>
      <div class="col-sm-2">
        
      </div>
    </div>
</div>
</div>
<?php
include_once ("./componentes/footer.php");
?>
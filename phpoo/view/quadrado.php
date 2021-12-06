<?php   
include ("../model/url.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cálculo</title>
  </head>
  <body style="background-color: #f1f1f1;" >


<div class="container">

      <div class="row">
        <div class="col-sm-12">
        <h2>Quadrado <a href="<?=$local;?>" class="badge bg-info"  > <i class="fas fa-undo-alt"></i> Voltar</a></h2>
        <div> 
              
      </div>

    <?php if(isset($_GET['area'])): ?>
        <div class="row align-items-start">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-8">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h3 class="card-title">Quadrado Calculado</h3>
              <h4 class="card-subtitle mb-2 text-muted">Area: <?=$_GET['area']; ?> </h4>
              <a href="<?=$view.'quadrado.php';?>" class="btn btn-info">Calcular novamente</a>
            </div>
          </div>
          <div class="col-sm-2"></div>
        </div>
      <?php else: ?>
        <div class="row align-items-start">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
              <form method="POST" action="<?=$controller.'quadrado.php';?>"  class="row g-3">
                  <div class="col-12">
                          <label for="inputAddress" class="form-label"><i class="fas fa-user-edit"></i>Digite a base do quadrado</label>
                          <input type="text" name="base_quadrado" class="form-control" id="inputAddress" placeholder="Digite a base do quadrado">
                  </div>

                  <div class="col-12">
                          <label for="inputAddress" class="form-label"><i class="fas fa-user-edit"></i>Digite a altura do quadrado</label>
                          <input type="text" name="altura_quadrado" class="form-control" id="inputAddress" placeholder="Digite a altura do quadrado">
                  </div>

                  <div class="col-12">
                          <button type="submit" class="btn btn-outline-success">Enviar</button>
                  </div>
              </form>
          </div>
          <div class="col-sm-2 ">

          </div>
        </div>
      <?php endif; ?>
</div>

  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
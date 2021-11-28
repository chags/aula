<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cálculo</title>
  </head>
  <body>
    <h1>Cálculos</h1>

<div class="container">
  <div class="row align-items-start">
    <div class="col-sm-2">
    
    </div>
    <div class="col-sm-8">
        <form method="POST" action="model/usuario.php"  class="row g-3">
            <div class="col-12">
                    <label for="inputAddress" class="form-label"><i class="fas fa-user-edit"></i>Digite a área do triangulo</label>
                    <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Digite a área do triangulo">
            </div>

            <div class="col-12">
                    <label for="inputAddress" class="form-label"><i class="fas fa-user-edit"></i>Digite a base do triangulo</label>
                    <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Digite a base do triangulo">
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
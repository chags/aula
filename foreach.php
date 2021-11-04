<?php

include_once ("./componentes/head.php");
include_once ("./componentes/navbar.php");
$title = "<h1>Foreach</h1><br>";
echo $title;

$lista = array(
        0 =>array (1,'cristiano','7295812032', '85 999593777','616525-000', false), 
        1 =>array (2 , 'lorena', '345624645' ,'85 9995959595','616525-000', false),     
        2 =>array (3, 'junior' , '63426462464', '85 26161681681','616525-000', false),     
        3 =>array (4, 'maria ', '342684646524', '85 654646849849','616525-000',false),  
        4 =>array (5, 'Lucas ', '342684646524', '85 654646849849','616525-000',false)             
      );

      #criação do aray de frutas
$frutas = array(0 =>array (1,'Abacate','R$ 2,74', '545588', false), 
                1 =>array (2, 'Abacaxi', 'R$ 1,56' ,'844552', false),     
                2 =>array (3, 'Açai' , 'R$ 1,10', '452236', false),     
                3 =>array (4, 'Acerola ', 'R$ 1,23', '856654', false), 
                4 =>array (5, 'Banana ', 'R$ 1,30', '767676', false),
                5 =>array (6, 'maçã ', 'R$ 1,46', '745863', false)    );

?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12"  style="text-align:justify" >
        <p>O FOREACH é uma simplificação do operador FOR para se trabalhar em coleções de dados,
ou seja, vetores e matrizes. Ele permite acessar cada elemento individualmente iterando sobre 
toda a coleção e sem a necessidade de informação de índices.
Por exemplo, supondo que fosse preciso percorrer um vetor com alguns elementos com o FOR.
Seria necessário utilizar um contador para servir também de índice para acessar cada elemento,
conforme a listagem a seguir.</p>
    </div>
  </div>

  <div class="row">
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Telefone</th>
        <th scope="col">CEP</th>
        <th scope="col">Controles  <i class="fas fa-gamepad"></i></th>        
      </tr>
    </thead>
    <tbody>

    <?php  foreach ($lista as $campo): ?>
      <?php if($campo[5] == true): ?> 

      <?php else: ?>   
      <tr>
        <th scope="row"><?=$campo[0]; ?></th>
        <td><?=$campo[1]; ?></td>
        <td><?=$campo[2]; ?></td>
        <td><?=$campo[3]; ?></td>
        <td><?=$campo[4]; ?></td> 
        
        
        <td> 
          <a class="btn btn-success" href="http://">Salvar</a>    
          <a class="btn btn-default" href="http://">Editar</a>      
          <a class="btn btn-danger" href="http://">Deletar</a>      
      </td>  
      </tr>

      <?php endif; ?>    
    <?php endforeach; ?>


    </tbody>
  </table>
  </div>

    <div class="row">
      <div class="col=12">
          <p>Exercicio: Criar uma tabela com dados de um array de frutas com seus respectivos nomes,  preços e codigos</p>
      </div>
      <!-- escrever a tabela apartir daqui -->
      <div class="row">
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Fruta</th>
        <th scope="col">Preço</th>
        <th scope="col">Código</th>
        <th scope="col">Controles  <i class="fas fa-gamepad"></i></th>        
      </tr>
    </thead>
    <tbody>
        <?php  foreach ($frutas as $campo): ?>
        <?php if($campo[4] == true): ?> 

        <?php else: ?>   
        <tr>
          <th scope="row"><?=$campo[0]; ?></th>
          <td><?php echo $campo[1]; ?></td>
          <td><?=$campo[2]; ?></td>
          <td><?=$campo[3]; ?></td>       
    <td> 
      <a class="btn btn-success" href="http://">Salvar</a>    
      <a class="btn btn-default" href="http://">Editar</a>      
      <a class="btn btn-danger" href="http://">Deletar</a>      
  </td>  
  </tr>

  <?php endif; ?>    
<?php endforeach; ?>


</tbody>
  </table>
  </div>

  

<?php
include_once "./componentes/footer.php";
?>
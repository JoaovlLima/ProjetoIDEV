<?php


if(!empty($_GET['ID']))
{
  include_once('config.php');
  $ID = $_GET['ID'];

  $sqlSelect = "SELECT * FROM banco_de_dado_loja.produtos WHERE ID = $ID" ;
  $result = $conexao->query($sqlSelect);
  print_r($result);
  if($result->num_rows>0){

    while($user_data = mysqli_fetch_assoc($result))
    {
      $nome = $user_data['Nome'];
      $preco = $user_data['preço'];
     
    }

  
  }else{
    echo 'id não encontrado';
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../ProjetoIDEV/css/Cadastro.css">
</head>
<body>
  <a href="consulta.php">VOLTAR</a>

  <div class="camada1">
    <div class="embaca" id="fundoEmbaca">
    <div class="container">
        <h2>Cadastro</h2>
        <br><br>
        <form action="updateProd.php" method="POST">
          <input type="text" placeholder="nome" id="Nome" name="Nome" class="inputUser" value="<?php echo $nome ?>">
          <br><br>
          <input type="text" placeholder="preco" id="preço" name="preço" value="<?php echo $preco ?>">
          <br><br>
          
          <input type="hidden" name="id" id="id" value="<?php echo $ID ?>">
          <input type="submit" value="update" id="updateProd" name="updateProd">
        </form>
      

      </div>
      </div>
      </div>
    
</body>

</html>
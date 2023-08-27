<?php

$senhasDiferente = false;
if(!empty($_GET['id']))
{
  include_once('config.php');
  $id = $_GET['id'];

  $sqlSelect = "SELECT * FROM banco_de_dado_loja.usuarios WHERE id = $id" ;
  $result = $conexao->query($sqlSelect);
  print_r($result);
  if($result->num_rows>0){

    while($user_data = mysqli_fetch_assoc($result))
    {
      $nome = $user_data['nome'];
      $sobrenome = $user_data['sobrenome'];
      $email= $user_data['email'];
      $senha= $user_data['senha'];
      $telefone= $user_data['telefone'];
      $cep= $user_data['cep'];
      $endereco= $user_data['endereco'];
    
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
  <a href="testCON.php">VOLTAR</a>
<script>
    <?php if ($senhasDiferente) { ?>
        window.addEventListener('DOMContentLoaded', function() {
            ativarPopUp();
        });
    <?php } ?>
</script>
  <div class="camada1">
    <div class="embaca" id="fundoEmbaca">
    <div class="container">
        <h2>Cadastro</h2>
        <br><br>
        <form action="updateUsu.php" method="POST">
          <input type="text" placeholder="nome" id="nome" name="nome" class="inputUser" value="<?php echo $nome ?>">
          <br><br>
          <input type="text" placeholder="Sobrenome" id="sobrenome" name="sobrenome" value="<?php echo $sobrenome ?>">
          <br><br>
          <input type="text" placeholder="E-mail" id="email" required name="email" value="<?php echo $email ?>">
          <br><br>
          <input type="password" placeholder="Senha" id="senha" required name="senha" value="<?php echo $senha ?>">
          <br><br>
          
          <input type="tell" id="telefone" class="input-padrao" name="telefone" required placeholder="(xx) xxxxx-xxxx" value="<?php echo $telefone ?>">
          <br><br>
          <input type="text" placeholder="Cep" id="cep" name="cep"value="<?php echo $cep ?>">
          <br><br>
          <input type="text" placeholder="Endereço" id="endereco" name="endereco" value="<?php echo $endereco ?>">
          <br><br>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <input type="submit" value="update" id="update" name="update">
        </form>
      

      </div>
      </div>
      </div>
    
</body>

</html>
<?php
session_start();
 /* print_r([$_REQUEST]); */

if(isset($_POST['submit'])&& !empty($_POST['email'])&&!empty($_POST['senha'])){

}
include_once('config.php');


  $sql = "SELECT * FROM banco_de_dado_loja.usuarios ORDER BY id DESC";
  $result = $conexao->query($sql);
  
  print_r($result);





?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nome</th>
      <th scope="col">sobrenome</th>
      <th scope="col">email</th>
      <th scope="col">senha</th>
      <th scope="col">telefone</th>
      <th scope="col">cep</th>
      <th scope="col">endereço</th>
      <th scope="col">...</th>
   
    </tr>
  </thead>
  <tbody>
  <?php
   while ($user_data = mysqli_fetch_assoc($result))
   {
echo("<tr>");
echo("<td>".$user_data['id']."</td>");
echo("<td>".$user_data['nome']."</td>");
echo("<td>".$user_data['sobrenome']."</td>");
echo("<td>".$user_data['email']."</td>");
echo("<td>".$user_data['senha']."</td>");
echo("<td>".$user_data['telefone']."</td>");
echo("<td>".$user_data['cep']."</td>");
echo("<td>".$user_data['endereco']."</td>");
echo("<td> 
    <a href='testEditUsu.php?id=$user_data[id]'> 
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
  </svg>
</a>
</td>");
echo("<tr>");
   }
   ?>
  </tbody>
</table>
</body>

</html>
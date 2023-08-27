<?php
include_once('config.php');

if((isset($_POST['update'])))
{
    $id=$_POST["id"];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email= $_POST['email'];
    $senha= $_POST['senha'];
    $telefone= $_POST['telefone'];
    $cep= $_POST['cep'];
    $endereco= $_POST['endereco'];
   

    $sqlUpdate = "UPDATE usuarios SET nome='$nome',sobrenome='$sobrenome',email='$email',senha='$senha',telefone='$telefone',cep='$cep',endereco='$endereco'
    WHERE id = '$id'";

    $result = $conexao->query($sqlUpdate);


}
header('Location: testCON.php')
?>
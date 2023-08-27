<?php
include_once('config.php');

if((isset($_POST['updateProd'])))
{
    $ID=$_POST["id"];
    $nome = $_POST['Nome'];
    $preco = $_POST['preço'];
   
   

    $sqlUpdate = "UPDATE produtos SET Nome='$nome',preço='$preco'
    WHERE ID = '$ID'";

    $result = $conexao->query($sqlUpdate);


}
header('Location: consulta.php')
?>
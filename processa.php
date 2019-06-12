<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['pswd1'];

$query = "insert into info (nome,email,senha) values ('$nome','$email','$senha')";
$salvar = mysqli_query($conexao, $query);

mysqli_close($conexao);

?>
<?php

include_once("conexao.php");
include_once("Usuario.php");


$obj = new Usuario($_POST['nome'], $_POST['email'], $_POST['pswd1']);

$nome = $obj->getNome();
$email = $obj->getEmail();
$senha1 = $obj->getSenha();

$confirmarSenha2 = $_POST['pswd2'];

if ($obj->getSenha() == $confirmarSenha2) {
	$query = "insert into info (nome,email,senha) values ('$nome','$email','$senha1')";
	$salvar = mysqli_query($conexao, $query);
	echo "<script>javascript:alert('Usuário Cadastrado')</script>";
	echo "<script>javascript:window.location='index.php'</script>";

	echo "<script>window.setTimeout(function() {header('Location: index.php');}, 3000);</script>";
	 
}else{
	
    echo "<script>javascript:alert('As senhas estão diferentes')</script>";
	echo "<script>javascript:window.location='cadastrar.php'</script>";

	$var = "<script>javascript:history.back(-2)</script>";
    echo $var;
}




mysqli_close($conexao);

?>
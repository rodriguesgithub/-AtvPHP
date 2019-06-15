<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['pswd'])) {
	header('Location: index.php');
	alert("if1 campo vazio");
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['pswd']);

$query = "select * from info where email = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {

	$_SESSION['email'] = $usuario;
	$_SESSION['nome'] = $nome1;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	alert('if 2 não nao_autenticado');
	exit();
}
<?php

$hostName = "localhost";
$user = "root";
$password = "";
$dataBase = "bancojon";
$conexao = mysqli_connect($hostName, $user, $password, $dataBase);


if(!$conexao){
	print "Falha na conexão";
}
?>
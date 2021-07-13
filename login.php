<?php

include 'db.php';

$usuario = addslashes($_POST['usuario']);
#Antes | print($_POST['senha']);
$senha =  md5($_POST['senha']);
#print('<br>');
#Depois | print($senha);

$query = "select * from usuarios where usuario = '$usuario' and senha = '$senha'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){
	/*echo 'login feito com sucesso';*/ 
	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;
	header('location:index.php');
}
else{
	/*echo 'Usuário ou senha Invalido';*/
	header('location:index.php?erro=erro=1');
}


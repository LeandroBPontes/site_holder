<?php
include "connect.php";


//data e hora atualizadas
date_default_timezone_set('America/Sao_Paulo');

$nome = $_POST['nome'];
$email = $_POST['email'];


include "substituicao_blog.php";
//verificacao
$registro = false;

if($nome != "" && $email != ""){
	$registro = true;
}
else{
		echo "<script>alert('É necessário preencher todos os campos');window.history.go(-1); </script>";
}

$data = date('Y-m-d');
$hora = date('H:i:s');


if(@$registro == true){
mysqli_query($link, "insert into tb_user(nome, email, data, hora) values('$nome', '$email', '$data', '$hora')");
	echo "<p style='text-align:center;color:#333;padding:5px;'>Cadastro realizado com sucesso!<br>";
		echo "<a href='blog.php' style='color:#59f'>Ir para o blog </a>";
		echo "</p>";}
	else{
		
		echo"<script>window.history.go(-1);</script>";

	}
?>
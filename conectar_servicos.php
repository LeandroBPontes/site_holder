<?php
include "connect.php";


//data e hora atualizadas
date_default_timezone_set('America/Sao_Paulo');

$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$servico = $_POST['servico'];

//arquivo de substituicao
include "substituicao.php";
//verificacao
$registro = false;

if($nome != "" && $email != "" && $celular != "" && $servico != ""){
	$registro = true;
}
else{
		echo "<script>alert('É necessário preencher todos os campos');window.history.go(-1); </script>";
}

$data = date('Y-m-d');
$hora = date('H:i:s');


if(@$registro == true){
mysqli_query($link, "insert into tb_servicos(nome, email, celular, servico, data, hora) values('$nome', '$email','$celular','$servico', '$data', '$hora')");
	echo "<p style='text-align:center;color:#333;padding:5px;'>Pedido realizado com sucesso!<br>";
		echo "<a href='index.php' style='color:#59f'>Ir para Home </a>";
		echo "</p>";}
	else{
		
		echo"<script>window.history.go(-1);</script>";

	}
?>
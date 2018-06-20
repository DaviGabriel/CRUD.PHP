<?php
session_start();
include_once("conexao.php");


$nome=filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

//echo "NOME: $nome   <br>";
//echo "EMAIL: $email <br>"

$result_usuario = "INSERT INTO usuarios (nome, email, creted) VALUES ('$nome','$email', NOW())";

$resultado_usuario = mysqli_query($con, $result_usuario);

if(mysqli_insert_id($con)){
	$_SESSION['msg']="<p style='color:green;'>USUARIO CADASTRADO COM SUCESSO</p>";
	header("location:index.php");
}else{
	$_SESSION['msg']="<p style='color:red';> ERRO NO CADASTRO</p>";
header("location:index.php");
}
?>
<?php
session_start();
include_once("conexao.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_EMAIL);
$especialidade = filter_input(INPUT_POST, 'especialidade', FILTER_SANITIZE_EMAIL);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_fagendacmc = "INSERT INTO fagendacmc (cpf,matricula, cidade, especialidade, created) VALUES ('$cpf', '$matricula', '$cidade', '$especialidade', NOW())";
$resultado_fagendacmc = mysqli_query($conn, $result_fagendacmc);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro Efetivado !</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Cadastro não Efetivado !</p>";
	header("Location: index.php");
}

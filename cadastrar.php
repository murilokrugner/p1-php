<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$documento = mysqli_real_escape_string($conexao, trim($_POST['documento']));

$sql = "INSERT INTO paciente (nome, documento, data_cadastro) VALUES ('$nome', '$documento', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
} 

$conexao->close();

header('Location: cadastro.php');
exit;
?>
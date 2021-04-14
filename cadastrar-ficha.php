<?php
session_start();
include("conexao.php");

$paciente = mysqli_real_escape_string($conexao, trim($_POST['dropdownMenuPaciente']));
$idade = mysqli_real_escape_string($conexao, trim($_POST['idade']));
$nascimento = mysqli_real_escape_string($conexao, trim($_POST['nascimento']));
$civil = mysqli_real_escape_string($conexao, trim($_POST['dropdownMenuEstado']));
$alergias = mysqli_real_escape_string($conexao, trim($_POST['alergias']));
$medicamentos = mysqli_real_escape_string($conexao, trim($_POST['medicamentos']));

$sql = "INSERT INTO ficha (paciente_id, idade, civil, alergias, medicamentos) VALUES ('$paciente', '$idade', '$nascimento', '$civil', '$alergias', '$medicamentos', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
} 

$conexao->close();

header('Location: ficha.php');
exit;
?>
<?php
session_start();
include("conexao.php");

$paciente = mysqli_real_escape_string($conexao, trim($_POST['dropdownMenuPaciente']));
$resultado = mysqli_real_escape_string($conexao, trim($_POST['resultado']));

$sql = "INSERT INTO ficha (paciente_id, resultado, data) VALUES ('$paciente', '$resultado', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
} 

$conexao->close();

header('Location: prontuario.php');
exit;
?>
<?php
session_start();
include_once("conect.php");

$novasenha=filter_input(INPUT_POST,'mudarsenha', FILTER_SANITIZE_STRING);

$novonome =filter_input( INPUT_POST,'mudarnome', FILTER_SANITIZE_STRING);
$falevc =filter_input( INPUT_POST,'sobrevc', FILTER_SANITIZE_STRING);
$falefa =filter_input( INPUT_POST,'sobrefa', FILTER_SANITIZE_STRING);
$ondnas =filter_input( INPUT_POST,'ondenas', FILTER_SANITIZE_STRING);
$senha=md5($senha);
$sql = "alter table `cad_user` (`senha`, `nome`) VALUES ('$novasenhasenha', '$novonome','$sobrenome',)";
$sql = "INSERT INTO `cad_user` (`sobrevc`, `sobrefa`, `	ondnas`) VALUES (NULL, '$falevc', '$falefa', '$ondnas')";

$slq = mysqli_query($conn, $sql);
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "Usuário salvo com sucesso";
	header("Location: perfil.php");
        mysqli_close($conn);
}else{
	$_SESSION['msg'] = "Usuário não foi salvo ";
	header("Location: mudarperfil.php");
}
?>


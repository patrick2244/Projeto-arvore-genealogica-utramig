<?php
session_start();
include_once("conect.php");
$novoemail=filter_input(INPUT_POST,'mudaremail', FILTER_SANITIZE_EMAIL);
$novasenha=filter_input(INPUT_POST,'mudarsenha', FILTER_SANITIZE_STRING);

$novonome =filter_input( INPUT_POST,'mudarnome', FILTER_SANITIZE_STRING);
$novosobrenome=filter_input(INPUT_POST,'mudarsobrenome', FILTER_SANITIZE_STRING);
$mudarsenha=md5($novasenha);
$sql ="UPDATE `cad_user` SET `email` = '$novoemail',`senha` = '$mudarsenha', `nome` = '$novonome', `sobrenome` = '$novosobrenome' WHERE `cad_user`.`id_user`= ".$_SESSION['id_user'];
$slq = mysqli_query($conn, $sql);
echo $sql;
if(mysqli_query($conn)){
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: editarperfil.php");
}else{
	
        $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: perfil.php");
        mysqli_close($conn);
}
?>

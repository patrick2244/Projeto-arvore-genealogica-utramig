<?php
session_start();
include_once("conect.php");
$email=filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$senha=filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);
$nome =filter_input( INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$sobrenome=filter_input(INPUT_POST,'sobrenome', FILTER_SANITIZE_STRING);


$data_nas = mysqli_real_escape_string($conn, $_POST['data_nas']);
$cep = mysqli_real_escape_string($conn, $_POST['cep']);
$cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
$uf =mysqli_real_escape_string($conn, $_POST['uf']);
$rua=mysqli_real_escape_string($conn, $_POST['rua']);
$bairro =mysqli_real_escape_string($conn, $_POST['bairro']);
$senha=md5($senha);
$sql = "INSERT INTO `cad_user` (`id_user`, `email`, `senha`, `nome`, `sobrenome`, `data_nas`, `cep`, `cidade`, `uf`, `rua`, `bairro`) VALUES (NULL, '$email', '$senha', '$nome', '$sobrenome', '$data_nas', '$cep', '$cidade', '$uf', '$rua', '$bairro')";
$slq = mysqli_query($conn, $sql);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: formulario2.php");
        mysqli_close($conn);
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: formulario1.php");
}


			
	
?>


           
	
 
<!DOCTYPE html>
<?php
session_start();
//include_once("valida.php");
include_once("conect.php");
//die();
$sql = mysqli_query($conn,"Select * From cad_user where id_user = ".$_SESSION['id_user']);
$exibe = mysqli_fetch_assoc($sql);

$post=filter_input(INPUT_POST,'postagem', FILTER_SANITIZE_EMAIL);
$sql = " INSERT INTO `post`(`postagem`) VALUES ('$post')";
$slq = mysqli_query($conn, $sql);
if(mysqli_insert_id($conn)){
    
   
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location:Linhadotempo.php");
        mysqli_close($conn);
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: Linhadotempo.php");
}
?>
?>
<?php


session_start();
include_once ("conect.php");
$grau_parent=filter_input(INPUT_POST,'grau_parente', FILTER_SANITIZE_STRING);
$nome_parent =filter_input( INPUT_POST,'nome_parent', FILTER_SANITIZE_STRING);
$sobrenome_parent=filter_input(INPUT_POST,'sobrenome_parent', FILTER_SANITIZE_STRING);


$data_nas = mysqli_real_escape_string($conn, $_POST['data_nas']);
$cep = mysqli_real_escape_string($conn, $_POST['cep']);
$cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
$uf =mysqli_real_escape_string($conn, $_POST['uf']);
$rua=mysqli_real_escape_string($conn, $_POST['rua']);
$bairro =mysqli_real_escape_string($conn, $_POST['bairro']);
$falecido=filter_input(INPUT_POST,'radio_obito', FILTER_SANITIZE_STRING);
$data_obto = mysqli_real_escape_string($conn, $_POST['data_obto']);
$id_user = $_SESSION['id_user'];
$sql = "INSERT INTO `cad_parent` (`id_parent`, `grau_parent`, `nome_parent`, `sobrenome_parent`, `data_nas`, `cep`, `cidade`, `uf`, `rua`, `bairro`,`falecido`,`data_obt`,`id_user`) VALUES (NULL, '$grau_parent', '$nome_parent', '$sobrenome_parent', '$data_nas', '$cep', '$cidade', '$uf', '$rua', '$bairro','$falecido','$data_obto',$id_user)";
$slq = mysqli_query($conn, $sql);
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Parente cadastrado com sucesso</p>";
	/*header("Location: arvore.php");*/
        
        mysqli_close($conn);
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: formulario2.php");
}
 

?>     
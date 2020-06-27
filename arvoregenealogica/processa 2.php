<?php


session_start();
include_once ("conect.php");
$grau_parent=filter_input(INPUT_POST,'grau_parente', FILTER_SANITIZE_STRING);
$nome_parent =filter_input( INPUT_POST,'nome_parent', FILTER_SANITIZE_STRING);
$sobrenome_parent=filter_input(INPUT_POST,'sobrenome_parent', FILTER_SANITIZE_STRING);

			
			$arquivo 	= $_FILES['arquivo']['name'];
			
			//Pasta onde o arquivo vai ser salvo
			$_UP['pasta'] = 'foto/';
			
			//Tamanho mÃ¡ximo do arquivo em Bytes
			$_UP['tamanho'] = 1024*1024*100; //5mb
			
			//Array com a extensÃµes permitidas
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
			
			//Renomeiar
			$_UP['renomeia'] = false;
			
			//Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'NÃ£o houve erro';
			$_UP['erros'][1] = 'O arquivo no upload Ã© maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'NÃ£o foi feito o upload do arquivo';
			
			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['arquivo']['error'] != 0){
				die("NÃ£o foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
				exit; //Para a execuÃ§Ã£o do script
			}
			
			//Faz a verificaÃ§Ã£o da extensao do arquivo
			$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
			if(array_search($extensao, $_UP['extensoes'])=== false){		
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/upload_imagem.php'>
					<script type=\"text/javascript\">
						alert(\"A imagem nÃ£o foi cadastrada extesÃ£o invÃ¡lida.\");
					</script>
				";
			}
			
			//Faz a verificaÃ§Ã£o do tamanho do arquivo
			else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/upload_imagem.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
			}
			
			//O arquivo passou em todas as verificaÃ§Ãµes, hora de tentar move-lo para a pasta foto
			else{
				//Primeiro verifica se deve trocar o nome do arquivo
				if($UP['renomeia'] == true){
					//Cria um nome baseado no UNIX TIMESTAMP atual e com extensÃ£o .jpg
					$nome_final = time().'.jpg';
				}else{
					//mantem o nome original do arquivo
					$nome_final = $_FILES['arquivo']['name'];
				}
				//Verificar se Ã© possivel mover o arquivo para a pasta escolhida
				
			}

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
    $diretorio="foto_parent/";
    $caminhoarquivo= $diretorio.$_FILES['arquivo']['name'];
	$_SESSION['msg'] = "<p style='color:green;'>Parente cadastrado com sucesso</p>";
	header("Location: arvore.php");
        
        mysqli_close($conn);
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: formulario2.php");
}
 

?>     
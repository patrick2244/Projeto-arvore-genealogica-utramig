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
$sql = "INSERT INTO `cad_user` (`id_user`, `email`, `senha`, `nome`, `sobrenome`, `data_nas`, `cep`, `cidade`, `uf`, `rua`, `bairro`,`nome_imagem`) VALUES (NULL, '$email', '$senha', '$nome', '$sobrenome', '$data_nas', '$cep', '$cidade', '$uf', '$rua', '$bairro','$nome_final')";
$slq = mysqli_query($conn, $sql);

if(mysqli_insert_id($conn)){
    $diretorio="foto_perfil/";
    $caminhoarquivo= $diretorio.$_FILES['arquivo']['name'];
    echo move_uploaded_file($_FILES['arquivo']['tmp_name'],$caminhoarquivo);
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
        mysqli_close($conn);
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: formulario1.php");
}
?>


           
	
 
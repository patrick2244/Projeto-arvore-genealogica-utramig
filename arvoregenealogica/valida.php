<?php
include_once ("conect.php");

if((isset($_POST['email'])) && (isset($_POST['senha']))){
    
		$email = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = md5($senha);
                
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM cad_user WHERE email = '$email' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
               $resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
                 
                    header("Location: formulario2.php");
			$_SESSION['id_user'] = $resultado['id'];
			$_SESSION['nome'] = $resultado['nome'];
			$_SESSION['email'] = $resultado['email'];
			}
                        
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
                       
			header("Location: index.php");
		}
}	
		?>
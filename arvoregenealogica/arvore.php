<?php
session_start();
//include_once("valida.php");
include_once("conect.php");
//die();
$sql = mysqli_query($conn,"Select * From cad_user where id_user = ".$_SESSION['id_user']);
$exibe = mysqli_fetch_assoc($sql);

?>


<html>
	<head>
       
    <title>Árvore Genealógica</title>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
     <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" ></script>

    
    
</head>

<body>
    <header class="header-section">
    <!-- BARRA DE USUARIO LOGADO -->
    <!-- MENU DE PAGINAS -->
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="linhadotempo.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="linhadotempo.php">Linha do Tempo</a></li>
                                    <li><a href="formulario2.php">Cadastre seus parentes</a></li>
                                    <li><a href="arvore.php">sua arvore </a></li>
                                    <li><a href="perfil.php">perfil</a>
                                        <ul class="dropdown">
                                            <li><a href="#">configuraçao</a></li>
                                            <li><a href="editarperfil.php">Editar Perfil</a></li>
                                            <li><a href="sair.php">Sair</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a href="contato2.php">Contato</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- FIM MENU DE PAGINAS -->
<!-- CAIXA DE CONTEUDO -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="" alt="">
                        <div class="ri-text">		
                            <h3><?php echo $exibe["nome"];?>  <?php echo $exibe["sobrenome"];?><span></span></h3>
							<br />
							<!-- Linha 1-->
							<h4>Nascimento</h4>
							<h2><?php echo$exibe["data_nas"];?></h4>
							
							<br />
							<!-- Linha 2-->
							<h4>Falecimento</h4>
							<h2>2020 - Contagem / MG</h4>
							<hr> </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
                     
                
                
  <?php              
   $sql="select*from cad_parent";
 $resultados = mysqli_query($conn, $sql);
 $sql = mysqli_query($conn,"Select * From cad_parent where id_user = ".$_SESSION['id_user']);
$exibe = mysqli_fetch_assoc($sql);?>
<?php
 if(mysqli_num_rows($resultados)){    
     
?>
                
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="" alt="">
                        <div class="ri-text">
                            
                            <h3><?php echo $exibe["nome_parent"];?>  <?php echo $exibe["sobrenome_parent"];?><span></span></h3>
							<br />
							<!-- Linha 1-->
							<h4>Nascimento</h4>
							<h2><?php echo$exibe["data_nas"];?></h4>
							
							<br />
							<!-- Linha 2-->
							<h4>Falecimento</h4>
							<h2>2020 - Contagem / MG</h4>
							<hr> 
                                                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>                                          
  <?php                                                      
 }else {
echo' parente nao cadastrado';
}
 
 ?>


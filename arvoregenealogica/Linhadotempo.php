<!DOCTYPE html>
<?php

session_start();
//include_once("valida.php");
include_once("conect.php");
//die();
$sql = mysqli_query($conn,"Select * From cad_user where id_user = ".$_SESSION['id_user']);
$exibe = mysqli_fetch_assoc($sql);

?>
 	


<!DOCTYPE html>
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
                                    <li><a href="perfil.php"> <img id="arquivo" src="foto_perfil/<?php echo $exibe["nome_imagem"];?>" alt="foto perfil" style="width:40" height="40"/><?php echo $exibe["nome"];?>  </a>
                                        <ul class="dropdown">
                                            <li><a href="#">configuraçao</a></li>
                                            <li><a href="editarperfil.php">Editar Perfil</a></li>
                                            <li><a href="sair.php">Sair</a></li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="linhadotempo.php">Linha do Tempo</a></li>
                                    <li><a href="formulario2.php">Cadastre seus parentes</a></li>
                                    <li><a href="arvore.php">Sua Arvore </a></li>
                                    
                                    
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
    
<?php
if (isset($_SESSION['id_user']))?>
                <form method="post" action="conteudo.php"  >
                    <center>
            
                        <textarea placeholder="oq vc esta pensando??"name="postagem"  required="" rows="10" cols="70"></textarea>
                 <br>
                        <input type="submit"class="btn btn-success pull-center"method="POST" value="postar"  >
                   
                    
                </form>                 
                    

 <?php

$sql= " select * from post order by id_postagem  ";
 $resultados = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultados)){
     while ($linha= mysqli_fetch_assoc($resultados)){
         echo ' <div class="co-text"> ';
         echo '<br><br>';
         echo $exibe["nome"].' : '.$linha["postagem"]. '  ';
           echo '<br><br>';echo '</div >';
  }
     
     
     
 } else {
     echo 'nao encontrou';
     
}
?>
 <!-- RODAPE -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>Sua Árvore Genealógica totalmente virtual</p>
							
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contate-nos</h6>
                            <ul>
                                <li>(31) 3263-7500</li>
                                <li>faleconosco@utramig.mg.gov.br</li>
                                <li>Av. Afonso Pena, 3400 - Cruzeiro, Belo Horizonte - MG</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>Fique por dentro</h6>
                            <p>Receba informacões sobre sua Árvore</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-5">
                        <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="" aria-hidden="true"></i> by TCC</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- RODAPE -->
  </body>


		
		
</html>


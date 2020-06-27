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
    <script type="text/javascript" >
        $(document).ready(function(){
    $("[name='radio_obito']").click(function(){
        
       var radio = $("[name='radio_obito']:checked").val();
      
      if(radio == 1){
          $("#divObito").show();
      }
      else{
           $("#divObito").hide();
      }
      
    });
    
    
    
     });

    </script>

    
    
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
                        <img src="foto_perfil/<?php echo $exibe["nome_imagem"];?>" alt="">
                        <div class="ri-text">		
                            <h3><?php echo $exibe["nome"];?>  <?php echo $exibe["sobrenome"];?><span></span></h3>
							<br />
                                                        
							<!-- Linha 1-->
							<h4>Nascimento</h4>
							<h2><?php echo$exibe["data_nas"];?></h4>
							
							<br />
							<!-- Linha 2-->

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section> 
                     
                
                
  <?php              
   $sql="select*from cad_parent";
 $resultados = mysqli_query($conn, $sql);
 $sql = mysqli_query($conn,"Select * From cad_parent where id_user = ".$_SESSION['id_user']);?>

<?php
 while($linha = mysqli_fetch_assoc($sql)){    
    
?>
<div style="position: relative;
  dow: 100;
  ">
 <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="" alt="">
                        <div class="ri-text">
                            
                            <h3><?php echo $linha["nome_parent"];?>  <?php echo $linha["sobrenome_parent"];?><span></span></h3>
							<br />
							<!-- Linha 1-->
                                                        <h4>Parentesco</h4>
							<h2><?php echo$linha["grau_parent"];?></h4>
							<h4>Nascimento</h4>
							<?php echo$linha["data_nas"];?>
							
							<br />
							<!-- Linha 2-->
                                                        <?php if ( $linha["falecido"]!=2){
                                                        echo '<h4>Falecimento</h4>';
							 echo $linha["data_obt"];
  
}?>
                </div>
            </div>
        </div>
    </section>  
</div>>
  <?php                                                      
    
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

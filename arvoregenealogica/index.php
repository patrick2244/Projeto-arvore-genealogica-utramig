<!DOCTYPE php>
<php lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Árvore Genealógica</title>

    <!-- modelos de edicao (css) -->
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
</head>


<body>
    
		 
		<div id="preloder">
			<div class="loader"></div>
		</div>
		 
		
		<!-- MENU DE PAGINAS -->
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="./index.php">Inicio</a></li>
                                    <li><a href="formulario1.php">Cadastre-se</a></li>
                                   <li><a href="./contact.php">Contato</a></li>
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
    

    <!-- BANNER JAVA -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
			
				<!-- TEXTO BANNER/JAVA -->
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Descubra sua história familiar</h1>
                        <p color="green">Cresça sua árvore de família, encontre novos parentes e explore bilhões de registros históricos</p>
                        <a href="#" class="primary-btn">Registrar-se</a>
                    </div>
                </div>
				<!-- FIM TEXTO BANNER/JAVA -->
				
				<!-- FORMULARIO BANNER/JAVA -->
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    
                    <div class="booking-form">
                        <h3>Entrar no seu perfil</h3>
                        <form class="form-signin" method="POST" action="valida.php">
                            
                            
                            <div class="check-date" >
                                <label for="inputEmail" class="sr-only">Usuário:</label>
                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                                <i class="fa fa-user"></i>
                            </div>
                            
                            
                          
                            <div class="check-date">
                                <label  class="sr-only">Senha</label>
        <input type="password" id="senha" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                               <i class="fa fa-key" onclick="mostrarSenha()"></i>
                                 <script>
			function mostrarSenha(){
				var tipo = document.getElementById("senha");
				if(tipo.type == "password"){
					tipo.type = "text";
				}else{
					tipo.type = "password";
				}
			}
		</script>
                            </div>
                            <button type="submit">Entrar</button>
                            <?php
			 if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				
                                }
                                 
                                ?>
                     
                        <p>
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				
			}?>
                            </p>
		</form>
    </div> <!-- /container -->
                    </div>
                </div>
				<!-- FIM FORMULARIO BANNER/JAVA -->
				
            </div>
        </div>
		
		<!-- CONFIG DAS IMAGENS DO BANNER/JAVA -->
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div>
        </div>
		<!-- FIM CONFIG DAS IMAGENS DO BANNER/JAVA -->
		
    </section>
    <!-- FIM BANNER JAVA -->

    <!-- PRIMEIRO/MODELO CAIXA DE CONTEUDO -->	
    <section class="spad-verde">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-text">
                        <div class="section-title-branco">
                            <h2>Crie sua árvore de família <br />online</h2>
                        </div>
						<br />
                        <p class="f-para-branco">O seu passado começa com sua árvore de família e é fácil construir uma no TreeGenology. <br />Adicione nomes, datas, fotos e histórias e compartilhe tudo isso com a sua família.</p>
                        <p class="s-para"></p>						
						<br > <br >
                        <a href="#" class="primary-btn about-btn">Continuar</a>
                    </div>
                </div>
				<br />
				
				<!--
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="img/about/about-1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="img/about/about-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
				-->	
				
            </div>
        </div>
    </section>
    <!-- FIM PRIMEIRO/MODELO CAIXA DE CONTEUDO -->	

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Alguns de nossos serviços </h2>
						<span2>Totalmente virtual</span2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Encontre familiares</h4>
                        <p>Veja o que outras pessoas compartilharam sobre sua família.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-042-menu"></i>
                        <h4>Facil Histórico</h4>
                        <p>Assim que você se registrar e criar sua árvore familiar, iremos te informar sobre parentescos pelo seu email.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Virtualidade</h4>
                        <p>Nosso sistema é totalmente virtual e 24 horas, estabelecendo um acesso mais facil.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

<!-- SEGUNDA/MODELO CAIXA DE CONTEUDO -->	
    <section class="spad-azul">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-text">
                        <div class="section-title-branco">
                            <h2>Saiba mais sobre sua família <br />online</h2>
                        </div>
						<br />
                        <p class="f-para-brancomaior">Informe um membro da família e veja oque podemos encontrar<br />dentro de nossa TreeGenology</p>
                        <p class="s-para"></p>
						
				<div class="col-xl-4 col-lg-6 offset-xl-4 ">
                    <div class="booking-formmorte">
                        <form action="#">
                            <div class="check-date">
                                <label for="date-in">Nome completo</label>
                                <input type="text" class="date-input" id="date-in">
                                <i class=""></i>
							</div>
							
                            <div class="check-date">
                                <label for="date-out">Local do nascimento</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class=""></i>
                            </div>
							<div class="check-date">
                                <label for="date-out">Local da morte</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class=""></i>
                            </div>
							<button type="submit">Continuar</button>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
				<br />
				
			



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
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Página Inicial</a></li>
                            <li><a href="#">Cadastre-se</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
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

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
   
</body>

</html>
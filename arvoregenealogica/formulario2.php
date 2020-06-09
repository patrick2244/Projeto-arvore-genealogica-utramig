<!DOCTYPE html>
<html lang="zxx">

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
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
           
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
    
    $("[name='radio_obito']").change(function(){
        alert("teste");
    });
    

    </script>
    
</head>

<body>
    <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="./index.php">Inicio</a></li>
                                    <li><a href="#">Pagina</a></li>
                                    <li><a href="#">Pagina</a></li>
                                    <li><a href="#">Pagina</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Pagina</a></li>
                                            <li><a href="#">Pagina</a></li>
                                            <li><a href="#">Pagina</a></li>
                                            <li><a href="#">Pagina</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pagina</a></li>
                                    <li><a href="./contact.html">Contato</a></li>
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
<!-- Formulario 2 -->
    
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Agora vamos adicionar os seus familiares</h4>
                  <p class="card-category">(O cadastro de parentes não é obrigatorio, caso não deseje cadastrar apenas clique em continuar)</p>
                </div>
                <div class="card-body">
                  <form action="" method="post">
                      
                       <div class="row">
                      <div class="col-md-12">
                          <label class="bmd-label-floating">Grau de parentesco</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      
                      <br>
                      
                    <div class="row">
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Nome do parente</label>
                          <input type="text" class="form-control">
                      </div>
                        
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Sobrenome do parente</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Data de Nascimento</label>
                          <input type="date" class="form-control">
                      </div>
                    </div>
                    
                     <div class="row">
                    <div class="col-md-4">
                          <label >CEP</label>
                          <input type="txt"value="" class="form-control" name="cep" id="cep" onblur="pesquisacep(this.value);" />
                          
                      </div>
                      <div class="col-md-4">
                          <label >Cidade</label>
                          <input name="cidade" type="text" value=""class="form-control"  id="cidade" />
                    </div>
                        
                      <div class="col-md-4">
                          <label >Estado</label>
                          <input type="text"name="uf" value=""class="form-control"id="uf"/>
                      </div>
                      </div>
                      
                      <br>
                      
                    <div class="row">
                      <div class="col-md-6">
                          <label >Rua</label>
                            <input type="text"value="" name="rua"class="form-control" id="rua"  />
                      </div>
                        <div class="col-md-6">
                          <label >Bairro</label>
                            <input type="text"value="" name="bairro"class="form-control"  id="bairro" />
                      
                      
                      
                      
                    
                   
                    
                    </div>
                      </div>
                    <div class="row">
                    <div class="col-md-4">
                          <label class="bmd-label-floating">Falecido?</label>
                          <input type="radio" name="radio_obito"/>sim
                          <input type="radio" name="radio_obito"/> não
                          <input type="text" class="form-control">
                          
                    </div>
                        
                    
                    <div id="obito" class="col-md-4">
                          <label class="bmd-label-floating">Data do Obito</label>
                          <input type="date" class="form-control">
                      </div>
                      </div>
                        
                      
                      <br>
                    <button type="submit" class="btn btn-primary pull-left">Adicionar a árvore</button>
                      <button type="submit" class="btn btn-success pull-right">Continuar</button>
                    <div class="clearfix"></div>
                 
                </div>
              </div>
            </div>
        </div> 
    </div>
  </div>
         </form>
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
							<!-- ICONES REDE SOCIAL 
                            <div class="fa-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
							 ICONES REDE SOCIAL  -->
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
                            <li><a href="./index.php">Página Inicial</a></li>
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
    
 
 </div>
   
    
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
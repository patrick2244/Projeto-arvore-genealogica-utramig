<!DOCTYPE html>
<?php session_start()?>
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
     <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
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
    </script>
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
                                    <li><a href="#">sua arvore </a></li>
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
    
<!-- Formulario 2 -->

    <form action="mudarperfil.php" method="post">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Ediçao de perfil</h4>
                  <p class="card-category">(nao é obrigatorio mudar o perfil )</p>
                </div>
                <div class="card-body">
                   <div >
                       <img id="blah" src="#" alt="foto perfil" style="width="136" height="200""/>
    </div>                   
                    
                <div class="row">
                      <div class="col-md-12">
                          <label class="bmd-label-floating">Mudar nome</label>
                          <input type="text" name="mudarnome" class="form-control">
                        </div>
                    <div class="col-md-12">
                          <label class="bmd-label-floating">Mudar Sobrenome</label>
                          <input type="text" name="mudarsobrenome" class="form-control">
                        </div>
                    <div class="col-md-12">
                          <label class="bmd-label-floating">Mudar senha</label>
                          <input type="password" name="mudarsenha" class="form-control">
                        </div>
                    <div class="col-md-12">
                          <label class="bmd-label-floating">Mudar email</label>
                          <input type="email" name="mudaremail" class="form-control">
                        </div>
                      </div>
                      
                      <br>
                      
                    <div class="row">
                      <div class="col-md-4">
                          <label class="bmd-label-floating">fale um pouco sobre você </label>
                          <p><textarea name="sobrevc"placeholder="sobre você"></textarea></p>
                      </div>
                        
                      <div class="col-md-4">
                          <label class="bmd-label-floating">onde vc nasceu?</label>
                          <textarea name="ondenas" placeholder="onde vcnasceu"></textarea>
                      </div>
                        <div class="col-md-4">
                          <label class="bmd-label-floating">fale um pouco sobre sua familia </label>
                          <p><textarea name="sobrefa" placeholder="sobre familia"></textarea></p>
                      </div>
                        <input type="submit"class="btn btn-success pull-right"method="POST" value="salvar ">
                      
                      </div>
                    </div>
                   </div>
              </div>
            </div>
        </div> 
    </div>
      </div>
</form>
     
   
        
        
        
        <script>
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>
        
        
       


    
    
      </body>  
</html>

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
    <!-- MENU DE PAGINAS -->
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="./perfil.php">perfil</a></li>
                                    <li><a href="formulario2.php">Cadastre seus parentes</a></li>
                                    <li><a href="#">sua arvore </a></li>
                                    <li><a href="#">Linha do tempo</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Pagina</a></li>
                                            <li><a href="#">Pagina</a></li>
                                            <li><a href="#">Pagina</a></li>
                                            <li><a href="#">Pagina</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pagina</a></li>
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
    
<!-- Formulario 2 -->

    <form action="processa 2.php" method="post">
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
                   <div >
                       <img id="blah" src="#" alt="your image" style="width="136" height="200""/>
    </div>                   
                    
                <div class="row">
                      <div class="col-md-12">
                          <label class="bmd-label-floating">Grau de parentesco</label>
                          <input type="text" name="grau_parent" class="form-control">
                        </div>
                      </div>
                      
                      <br>
                      
                    <div class="row">
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Nome do parente</label>
                          <input name="nome_parent"type="text" class="form-control">
                      </div>
                        
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Sobrenome do parente</label>
                          <input name="sobrenome_parent" type="text" class="form-control">
                      </div>
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Data de Nascimento</label>
                          <input name="data_nas" type="date" class="form-control">
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
                          
                          <br>
                          <br>
                          <input type="radio" value="1" name="radio_obito"/>sim
                          <input type="radio" value="2" name="radio_obito"/> não
                      </div>
                        
                        <br>
                        <div id="divObito" style="display:none;" class="col-md-4">
                          <label class="bmd-label-floating">Data do Obito</label>
                          <input type="date" name="data_obto" class="form-control">
                      </div>
                      </div>
                        
                      <br>
                      <br>
                     <input type="submit"class="btn btn-success pull-right"method="POST" value="Cadastrar ">
                      <input type='file' id="imgInp" />
                 
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
        
        
       <?php
	

        
?>
<br>
<a href="sair.php">Sair</a> 
    
    
      </body>  
</html>
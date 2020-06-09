<!DOCTYPE html>
<html lang="zxx">

<head>
  
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Árvore Genealógica</title>
<!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Adicionando Javascript -->
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
  

    </head>
   

    <body>
        <
                
          

  
    <!-- Formulario 1 -->
    <form method="POST" action="processa1.php">
    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
             
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Prencha seu cadastro </h4>
                  <p class="card-category">(todos os campos com sao obrigatorois)</p>
                 </div>
                  
                <div class="card-body">
    
                      
                       <div class="row">
                           
                      <div class="col-md-12">
                          
                          <label class="bmd-label-floating">E_mail*</label>
                          <input type="email" class="form-control" name="email">
                       
                        </div>
                           
                      </div>
                  
                      
                      <br>
                      <div class="row">
                      <div class="col-md-6">
                          <label class="bmd-label-floating">senha*</label>
                          <input type="password" class="form-control"name="senha">
                          <label class="bmd-label-floating">Confirmar senha*</label>
                          <input type="password" class="form-control">
                        </div>
                      </div>
                      
                      
                      <br>
                      
                    <div class="row">
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Nome </label>
                          <input type="text" class="form-control"name="nome">
                      </div>
                        
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Sobrenome </label>
                          <input type="text" class="form-control"name="sobrenome">
                      </div>
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Data de Nascimento</label>
                          <input type="date" class="form-control"name="data_nas">
                      </div>
                    </div>
                    
                      <br>
                      
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
                      <br>
                   <input type="submit"class="btn btn-success pull-right"method="POST" value="Cadastrar e continuar">
                   
                    </div>
                      </div>
               
                      <br>
                 

                    
    
                </div>
              </div>
            </div>
        </div> 
    </div>
  
</form>
    <!--fim do formulario 1-->
    
   
    
    
</body>
</html>
    
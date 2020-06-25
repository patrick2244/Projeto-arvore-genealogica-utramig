<?php
include_once("valida.php");
$sql = mysqli_query($conn,"Select * From cad_user");
$exibe = mysqli_fetch_assoc($sql);

?>
 


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
                  <h4 class="card-title">Seu perfil</h4>
                
                </div>
                <div class="card-body">
                   <div >
                       <img id="blah" src="#" alt="foto perfil" style="width="136" height="200""/>
    </div>                   
                    
                <div class="row">
                    <div class="col-md-4">
                          <label class="bmd-label-floating">nome: </label>
                         <input type="text" placeholder="<?php echo $exibe["nome"];?>" class="form-control">
                          
                        </div>
                      
                    <div class="col-md-4">
                          <label class="bmd-label-floating">sobrenome: </label>
                          <input type="text" placeholder="<?php echo $exibe["sobrenome"];?>" class="form-control">
                          
                        </div>
                    <div class="col-md-4">
                          <label class="bmd-label-floating">data de nascimento </label>
                          <input type="text" placeholder="<?php echo$exibe["data_nas"];?>" class="form-control">
                        </div>
                    <div class="col-md-12">
                          <label class="bmd-label-floating">cidade: </label>
                          <input type="text" placeholder="<?php echo $exibe["cidade"];?>" class="form-control">
                         </div>
                      </div>
                      
                      <br>
                      
                    <div class="row">
                      <div class="col-md-12">
                          <label class="bmd-label-floating">sobre você: </label>
                          <input type="text" placeholder="<?php echo $exibe["sobrevc"];?>" class="form-control">
                      </div>
                        
                      <div class="col-md-12">
                          <label class="bmd-label-floating">onde você nasceu:</label>
                          <input type="text" placeholder="<?php echo $exibe["ondnas"];?>" class="form-control">
                      </div>
                        <div class="col-md-12">
                          <label class="bmd-label-floating">sobre sua familia </label>
                          <input type="text" placeholder="<?php echo $exibe["sobrefa"];?>" class="form-control">
                      </div>
                        
                      
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


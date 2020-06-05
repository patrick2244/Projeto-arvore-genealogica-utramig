<!DOCTYPE html>
<html lang="zxx">

<head>
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
    
</head>
<!-- codigo para funcionamento do cep-->
<?php    function get_endereco($cep){
  // formatar o cep removendo caracteres nao numericos
  $cep = preg_replace("/[^0-9]/", "", $cep);
  $url = "http://viacep.com.br/ws/$cep/xml/";
  $xml = simplexml_load_file($url);
  return $xml;
}
?>
<!-- Formulario 1 -->
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
                  <form action="" method="post">
                      
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
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                          <label class="bmd-label-floating">Confirmar senha*</label>
                          <input type="password" class="form-control"name="senha">
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
                          <input type="text" class="form-control"nome="sobrenome">
                      </div>
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Data de Nascimento</label>
                          <input type="date" class="form-control"name="datanas">
                      </div>
                    </div>
                    
                      <br>
                      
                    <div class="row">
                    <div class="col-md-4">
                          <label class="bmd-label-floating">CEP</label>
                          <input type="txt" class="form-control" name="cep">
                          <button type="submit">validar cep</button>
                      </div>
                        <!-- php para mostrar os campos do cep  -->
                        <?php if (isset($_POST['cep'])){ ?>
                      
<?php $endereco = get_endereco($_POST['cep']); ?>
                    
                    <div class="col-md-4">
                          <label class="bmd-label-floating">Cidade</label>
                          <input type="text" class="form-control"readonly="" disabled="" placeholder="<?php echo $endereco->localidade; ?>" name="localidade"/>
                    </div>
                        
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Estado</label>
                          <input type="text" class="form-control"readonly="" disabled="" placeholder="<?php echo $endereco->uf; ?>"name="uf"/>
                      </div>
                      </div>
                      
                      <br>
                      
                    <div class="row">
                      <div class="col-md-12">
                          <label class="bmd-label-floating">Endereço</label>
                            <input type="text" class="form-control" readonly="" disabled="
                                   " placeholder="<?php echo $endereco->logradouro; ?> , <?php echo $endereco->bairro; ?> 
                                   " name=" endereco" />
                      </div>
                    </div>
                   <?php } ?>
                    <br>
                    </div>
                      </div>
                      <br>
                    <button type="submit" class="btn btn-success pull-right"><a href="formulario2.php">Continuar</a></button>
                    <div class="clearfix"></div> 
                  </form>
                </div>
              </div>
            </div>
        </div> 
    </div>
  </div>
        
    </div>
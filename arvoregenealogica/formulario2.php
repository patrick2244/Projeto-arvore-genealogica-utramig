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
<!-- Formulario 2 -->
    <div class="main-panel">
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
                    
                      <br>
                      
                    <div class="row">
                    <div class="col-md-4">
                          <label class="bmd-label-floating">CEP</label>
                          <input type="text" class="form-control" name="cep">
                          <button type="submit">validar cep</button>
                      </div>
                        <!-- php para mostrar os campos do cep  -->
                        
<?php $endereco = get_endereco($_POST['cep']); ?>
                    
                    <div class="col-md-4">
                          <label class="bmd-label-floating">Cidade</label>
                          <input type="text" class="form-control"readonly="" disabled="" placeholder="<?php echo $endereco->localidade; ?>"/>
                    </div>
                        
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Estado</label>
                          <input type="text" class="form-control"readonly="" disabled="" placeholder="<?php echo $endereco->uf; ?>"/>
                      </div>
                      </div>
                      
                      <br>
                      
                    <div class="row">
                      <div class="col-md-12">
                          <label class="bmd-label-floating">Endereço</label>
                            <input type="text" class="form-control" readonly="" disabled="" placeholder="<?php echo $endereco->logradouro; ?> , <?php echo $endereco->bairro; ?> " />
                      </div>
                    </div>
                     
                    <br>
                      
                      
                    <div class="row">
                    <div class="col-md-4">
                          <label class="bmd-label-floating">Falecido?</label>
                          <input type="text" class="form-control">
                    </div>
                        
                    
                    <div class="col-md-4">
                          <label class="bmd-label-floating">Data do Obito</label>
                          <input type="text" class="form-control">
                      </div>
                      </div>
                        
                      
                      <br>
                    <button type="submit" class="btn btn-primary pull-left">Adicionar a árvore</button>
                      <button type="submit" class="btn btn-success pull-right">Continuar</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div> 
    </div>
  </div>
        
    </div>
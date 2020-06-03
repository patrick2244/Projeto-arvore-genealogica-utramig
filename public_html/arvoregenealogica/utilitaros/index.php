<!DOCTYPE html>

<html>
    <head>
        
          
         
     

        
        <meta charset="UTF-8">
        <title></title>
        <form name action="" method="post"  >
            
    </head>
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 250px;
  margin-bottom: 15px;
}

.icon {
  padding: 12px;
  background: #755b4e;
  color: white;
  min-width: 40px;
  min-height:
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
    <body>
              
          
           <?php    function get_endereco($cep){
  // formatar o cep removendo caracteres nao numericos
  $cep = preg_replace("/[^0-9]/", "", $cep);
  $url = "http://viacep.com.br/ws/$cep/xml/";
  $xml = simplexml_load_file($url);
  return $xml;
}
?>
     

        
        <form action="" method="post" style="max-width:500px;margin:auto">
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="*usuario" name="usuario">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="*senha" name="senha">
  </div>
            <div class="input-container">
    <i class="fa fa-name icon"></i>
    <input class="input-field" type="text" placeholder="*nome" name="nome">
  </div>
            <div class="input-container">
    <i class="fa fa-name icon"></i>
    <input class="input-field" type="text" placeholder="*sobrenome" name="nome">
  </div>
             <div class="input-container">
    <i class="fa fa-mail icon"></i>
    <input class="input-field" type="txt" placeholder="*e_mail" name="e_mail">
  </div>
       
        

     <div class="input-container">
    <i class="fa fa-cep icon"></i>
    <input  type="text" name="cep"placeholder="*cep " >
    <button type="submit">validar cep</button>
  </div>
            
    <?php if($_POST['cep']){ ?>
<?php $endereco = get_endereco($_POST['cep']); ?>
            
            
            
            
          
        
        <div class="input-container">
    <i class="fa fa-mail icon"></i>
    <input class="input-field" type="txt" placeholder="<?php echo $endereco->logradouro; ?>" name="rua">
  </div>
            <div class="input-container">
    <i class="fa fa-mail icon"></i>
    <input class="input-field" type="txt" placeholder="<?php echo $endereco->bairro; ?>" name="bairro">
  </div>
            <div class="input-container">
    <i class="fa fa-mail icon"></i>
    <input class="input-field" type="txt" placeholder="<?php echo $endereco->localidade; ?>" name="cidade">
  </div>
            <div class="input-container">
    <i class="fa fa-mail icon"></i>
    <input class="input-field" type="txt" placeholder="<?php echo $endereco->uf; ?>" name="uf">
  </div>
            
    
  


<?php } ?>
       </form>
    </body>
</html>

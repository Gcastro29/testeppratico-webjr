<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css"> 
    <script src="../js/index.js" type="module" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body style="background-color:#1f1f1e">
    <img src="../img/logo lag.png">
    <h1 class="title">Cadastro de Dados</h1><ul></ul>
    
<form  class="container" action="pageDados.php" method="POST">
  <div class="row  d-flex justify-content-center">
    <div class="col-md-8 inputbox">
           <label for="nome">Nome</label>
        <input type="text"  name="nome" id="nome" required>
    </div>
  </div>

  <div class="row  d-flex justify-content-center">
    <div class="col-md-8 inputbox">
           <label for="email">Email</label>
           <input type="email" name="email" id="email" required>
    </div>
  </div>

  <div class="row  d-flex justify-content-center">
    <div class="col-md-4 inputbox">
         <label for="cep">CEP</label>
         <input type="text" name="cep" id="cep" required>
    </div>
    <div class="col-md-4 inputbox ">
          <label for="endereco">Endereço</label>
          <input type="text" name="endereco" id="endereco" required >
    </div>
  </div>

  <div class="row  d-flex justify-content-center">
    <div class="col-md-4 inputbox">
         <label for="numero">Numero</label>
         <input type="text" name="numero" id="numero" required>
    </div>

    <div class="col-md-4 inputbox ">
          <label for="bairro">Bairro</label>
          <input type="text" name="bairro"  id="bairro" required >
    </div>
  </div>

    <div class="row  d-flex justify-content-center">
        <div class="col-md-4 inputbox">
             <label for="cidade">Cidade</label>
             <input type="text"  name="cidade" id="cidade" required>
    </div>

    <div class="col-md-4 inputbox ">
              <label for="estado">Estado</label>
              <input type="text" name="estado" id="estado" required >
    </div>
</div>

    <div class="row  d-flex justify-content-center ">
      <button type="submit" id="btn" >Cadastrar</button>
    </div>

    <?php
               include("../database/conexaoDB.php");
                          
               
    ?>


</form>

    

    

</body>
</html>
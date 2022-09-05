<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Lista Dados Cadastrados</title>

</head>
<body >
    
    <a href="inquiryForm.php" style="font-size:20px;margin-left:20px">Voltar</a>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div>
                   
                    <h1 style="text-align:center">Informações Cadastradas</h1>
                </div>
            </div>
        </div>
        <hr>
        <div class="row" >
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered"  >
                        <thead class="bg-warning" >
                            <tr >
                             
                                <th  class="coluna">NOME</th>
                                <th  class="coluna">EMAIL</th>
                                <th  class="coluna">CEP</th>
                                <th  class="coluna">ENDEREÇO</th>
                                <th  class="coluna">NUMERO</th>
                                <th  class="coluna">BAIRRO</th>
                                <th  class="coluna">CIDADE</th>
                                <th  class="coluna">ESTADO</th>
                             

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
        include("../database/conexaoDB.php");
        include("../controllers/insertDados.php");
    
      
      
     ?>
  
  <script src="../js/custom.js"></script>
   
</body>
</html>
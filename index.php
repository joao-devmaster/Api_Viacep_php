
 <?php
include_once ('viacep.php');
  error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>viaCep</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
</head>
<body style="background-color: #A7C0D6;">

    <header>
        <nav class="menu navbar navbar-expand-md navbar-dark bg-dark  fixed-top">
            <div class="container">

              <a href="#home"></a>
              
              <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
              </button>
      
                <div class="collapse navbar-collapse" id="nav-principal">

                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="#home" class="nav-cv nav-link mx-2 text-white">Home</a>
                        </li>
        
                    </ul>
      
                </div>
            </div>
        </nav>

    </header>


          <div class="container">
                <div class="row">
                    <div class="col">
                     Column
                    </div>
                    <div class="col">

                    <h3>Pesquisar localização</h3>
                    <form action="." method="post" >
                             <div class="mb-3">
                                <label class="titlecep" >Digite um Cep</label>
                                <input name="cep" type="text" class="inputd"     >
                            </div>
                            <button type="submit" class="btn btn-success">CONSULTAR</button>
                            <div class="mb-3">
                                <label class="form-label">Rua:</label>
                                <input type="text" class="form-control"  name="logradouro" value="<?php echo $addres->logradouro ?>"    >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bairro:</label>
                                <input type="text" class="form-control" name="bairro" value="<?php echo $addres->bairro ?>"     >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Cidade:</label>
                                <input type="text" class="form-control"  name="localidade" value="<?php echo $addres->localidade ?>"     >
                            </div>
                            <div class="mb-3">
                                <label   class="form-label">Estado:</label>
                                <input type="text" class="form-control"  name="uf" value="<?php echo $addres->uf ?>"    >
                            </div>
                           
                            </form>
                    </div>
                    <div class="col">
                    <img class="imgphoto" src="./image/01.png" alt="foto de um celular com mapa ">
                    
                    </div>
                </div>
        </div>

</body>
</html>
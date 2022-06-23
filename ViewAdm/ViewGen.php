<?php 

include_once("../model/timemodel.php");
include_once("../model/conexao.php");
UsarAcesso();

extract($_REQUEST,EXTR_OVERWRITE);
$codtime = isset($codtime)?$codtime:0; 
if($codtime != 0 ){
  $_SESSION["codtime"] = $codtime;
}

?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="body3">



  <nav class="navbar bg-dark ">
    <div class="container-fluid ">
      <a class="navbar-brand text-white" href="../index.php">Major League</a>
      <button class="icon" class="" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header bg-dark">
          <h5 class="text-white " id="offcanvasNavbarLabel">Major League</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-dark">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

            <li id="in" class="nav-item">
              <a class="nav-link active text-white" href="../index.php">Home</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </nav>
  <main class="container">
  <?php

$codigoTime = $_SESSION["codtime"];

$time = buscaTimeCodigo($conn,$codigoTime);

if($time["validaTimekg"] == 1){
  $validaTimekg = "<font color='#51FF66'>Valido</font>";
}else{
  $validaTimekg = "<font color='#FF5151'>Bloqueado</font>";
}


?>
<div class="container">
<div class="nometime"><?=$time["nomeTime"]?></div>

    <img class="imglogo" src="<?=$time["logoTime"]?>">
<form method="POST" action="../controller/alterarkg.php" >
    <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel">V</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Esse time realizou a entrega dos alimentos?
    </div>
    <div class="modal-footer">
      <input type="hidden" name="codigoTimes" value="<?php print_r($codigoTime)?>">
     <button  class="btn btn-danger" type="$_POST"  name="vldemail" value="0" >Não</button>
     <button  class="btn btn-success" type="$_POST"  name="vldemail" value="1" >Sim</button>

    </div>
  </div>
</div>
</div>
<a  data-bs-toggle="modal" href="#exampleModalToggle1" role="button">

      <div class="situtime"><?php print_r($validaTimekg)  ?></div>
    </a>
    </form>
</div>
<?php ?>
<!--<a href="../controller/sai.php"><button type="button" class="btn btn-danger" > Sair</button></a>-->


</h1>



    <table class="table">
      <thead>
        <tr>
        <th scope="col">Código</th>
          <th scope="col">Jogadores</th>
          <th scope="col">E-mail</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
<?php



$jogadores = buscaJogadoresTimeCodigo($conn,$codigoTime);
foreach($jogadores as $nomesjogadores):
  ?>
      <tr>
        <th scope="row"><?php echo($nomesjogadores["codjogador"]);?></th>
        <td><?php echo($nomesjogadores["nomeJogador"]);?></td>
        <td><?php echo($nomesjogadores["emailJogador"]);?></td>
        <td>
          <?php 
        
        if($nomesjogadores["validaEmail"] == 1){
          $validaEmail = "<font color='#51FF66'>Liberado</font>";
        }else{
          $validaEmail = "<font color='#FF5151'>Bloqueado</font>";
        }
        
        
        echo($validaEmail);?></td>
        
      </tr>
      <?php
  endforeach;
  
      ?> 
    </tbody>
    </table>
  </main>

</body>
</html>
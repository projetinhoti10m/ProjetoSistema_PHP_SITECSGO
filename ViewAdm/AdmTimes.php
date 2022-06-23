<?php
include_once("../model/conexao.php");
include_once("../model/timemodel.php");
Usaracesso();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Document</title>
</head>
<body class="body2">
<nav class="navbar bg-dark fixed-top">
    <div class="container-fluid ">
      <a class="navbar-brand text-white" href="index.html">Major League</a>
      <button class="icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
<span class="icon"></span>
</button>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
<div class="offcanvas-header bg-dark">
  <h5 class="text-white " id="offcanvasNavbarLabel">Major League</h5>
  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body bg-dark">
  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    
    <li class="nav-item">
        <a class="nav-link active text-white" href="../index.php" >Home</a>
      </li>
    
  </ul>

</div>
</div>
</div>
</nav>

<main id="main" class="container">
    <form action="" method="POST" class="form1  container">
    <label for="formGroupExampleInput" class="titulotime">Time:</label>
    <div class="input-group col-5">
        <div class="input-group-text">
        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
        </div>
        <input name="nomeTime" type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Digite o código do time">
        <button class="btn btn-primary" type="submit">Pesquisar</button>
    </div>
    
    </form>
    <div class="teste container">
        
    <table class="table1">
      <thead>
        <tr>
        <th scope="col">Código</th>
          <th scope="col">Nome do time</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
<?php
$nomeTime =  isset ($_POST["nomeTime"])?$_POST["nomeTime"] :"";

if($nomeTime){

$Time = buscatimek($conn,$nomeTime);
foreach($Time as $nomeTimes):
  ?>
      <tr>
        <th scope="row"><form method="POST" action="ViewGen.php"><button class="btn btn-info" name="codtime" value="<?php echo($nomeTimes["codigoTimes"])?>"><?php echo($nomeTimes["codigoTimes"]);?></button></form></th>
        <td><?php echo($nomeTimes["nomeTime"]);?></td>
        <td>
          
          
          <?php if($nomeTimes["validaTimekg"] == 1){
          $validaEmail = "<font color='#51FF66'>Valido</font>";
        }else{
          $validaEmail = "<font color='#FF5151'>Bloqueado</font>";
        }
        echo($validaEmail);?></td>
      </tr>
      <?php
  endforeach;
  }
      ?> 
    </tbody>
    </table>
    </div>
    <div class="validaemail  container">
      <p class="titulocomo"><strong>Como fazer a validação dos times? </strong></p>
      <p>1°Faça a busca do time</p>
      <p>2°Clique no código do time para realizar a validação do time</p>
    </div>
    
    
</main>
</body>
</html>
<?php   
session_start();
extract($_REQUEST,EXTR_OVERWRITE);
  /*foreach($_SESSION["jogadores"] as $no) {
    echo($no);
  };*/
$_SESSION['jogadores'];
$nometime;
$logo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel='stylesheet' href='css/viewverifica.css'><link rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<main class="container">
<form action="../controller/inserirtime.php" method="POST" class="row g-3" style="margin-left: 30%;">
<div class="pm" style="width:82%">
  <div id="nometime" class="col-md-3">
    <label id="font" class="form-label">Nome do Time</label>
    <input type="text" name="nometime" class="form-control form-control-sm" value="<?php print_r($nometime) ?>" placeholder="Digite seu nome" required>
  </div>
    
<input type="hidden" name="logotime" value="<?php print_r($logo)?>" >
<img class="logoverifica" src="<?php print_r($logo)?>" alt="" style="width: 140px;">
</div>
  <div id="nomejogador" class="col-md-4">
    <label id="font" class="form-label">Nome do jogador</label>
    <input type="string" name="nomejogador" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][0])?>"  required>
  </div>

  <div id="fonejogador" class="col-md-4">
    <label id="font" class="form-label">Telefone</label>
    <input type="text" name="fonejogador" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][1])?>" placeholder="Digite seu nome" required>
  </div>
  
  <div id="fonejogador" class="col-md-4">
    <label id="font" class="form-label">Email</label>
    <input type="text" name="emailjogador" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][2])?>" placeholder="Digite seu nome" required>
  </div>
  <hr/>
  <div id="nomejogador" class="col-md-4">
    <label id="font" class="form-label">Nome do jogador</label>
    <input type="string" name="nomejogador1" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][3])?>"  required>
  </div>

  <div id="fonejogador" class="col-md-4">
    <label id="font" class="form-label">Telefone</label>
    <input type="text" name="fonejogador1" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][4])?>" placeholder="Digite seu nome" required>
  </div>
  
  <div id="fonejogador" class="col-md-4">
    <label id="font" class="form-label">Email</label>
    <input type="text" name="emailjogador1" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][5])?>" placeholder="Digite seu nome" required>
  </div>
  <hr/>
  <div id="nomejogador" class="col-md-4">
    <label id="font" class="form-label">Nome do jogador</label>
    <input type="string" name="nomejogador2" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][6])?>"  required>
  </div>

  <div id="fonejogador" class="col-md-4">
    <label id="font" class="form-label">Telefone</label>
    <input type="text" name="fonejogador2" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][7])?>" placeholder="Digite seu nome" required>
  </div>
  
  <div id="fonejogador" class="col-md-4">
    <label id="font" class="form-label">Email</label>
    <input type="text" name="emailjogador2" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][8])?>" placeholder="Digite seu nome" required>
  </div>
  <hr/>
  <div id="nomejogador" class="col-md-4">
    <label id="font" class="form-label">Nome do jogador</label>
    <input type="string" name="nomejogador3" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][9])?>"  required>
  </div>

  <div id="fonejogador" class="col-md-4">
    <label id="font" class="form-label">Telefone</label>
    <input type="text" name="fonejogador3" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][10])?>" placeholder="Digite seu nome" required>
  </div>
  
  <div id="fonejogador" class="col-md-4">
    <label id="font" class="form-label">Email</label>
    <input type="text" name="emailjogador3" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][11])?>" placeholder="Digite seu nome" required>
  </div>
  <hr/>
  <div id="nomejogador" class="col-md-4">
    <label id="font" class="form-label">Nome do jogador</label>
    <input type="string" name="nomejogador4" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][12])?>"  required>
  </div>

  <div id="fonejogador" class="col-md-4">
    <label id="font" class="form-label">Telefone</label>
    <input type="text" name="fonejogador4" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][13])?>" placeholder="Digite seu nome" required>
  </div>
  
  <div id="fonejogador" class="col-md-4">
    <label id="font" class="form-label">Email</label>
    <input type="text" name="emailjogador4" class="form-control form-control-sm" id="validationServer01" value="<?php print_r($_SESSION['jogadores'][14])?>" placeholder="Digite seu nome" required>
  </div>
  <div class="col-12">
     <button class="btn btn-primary" type="submit">Enviar</button></a>
  </div>
 </form>


</main>
<footer class="footer">
    <div>O objetivo do nosso Projeto alem de colocar em prática o nosso aprendizado, tambem tem o objetivo de arracadar alimentos para pessoas que se encontra em condições de vulnerabilidade social, econômica e/ou cultural. </div>
</footer>
</body>
</html>
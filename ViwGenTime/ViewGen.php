<?php 

include_once("../model/timemodel.php");
include_once("../model/conexao.php");
UsarAcesso();
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="estilo.css">
</head>

<body class="body0">



  <nav class="navbar bg-dark ">
    <div class="container-fluid ">
      <a class="navbar-brand text-white" href="../index.php">Major League</a>
      <div class="seja">Seja bem vindo:  <?=$_SESSION["email"]?></div>
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

            <!--<li class="nav-item">
              <a class="nav-link active text-white" href="ViewAdm/ViewAdm.php">Administração</a>
            </li>-->

            <!--<li class="nav-item">
              <a class="nav-link active text-white" href="ViewDoc/documentacao.php">Documentação</a>
            </li>-->
          </ul>

        </div>
      </div>
    </div>
  </nav>
  <main class="container">
    
  <?php
$codigoTime = $_SESSION["time"];

$time = buscaTimeCodigo($conn,$codigoTime);

if($time["validaTimekg"] == 1){
  $validaTimekg = "Liberado";
  $validaTK = "<font color='#51FF66'>!!Confirmada!! a doação dos 5kg.  <br> Bom estamos quase lá, <br> verifique se os jogadores desse time verificaram o e-mail, em breve mais detalhes sobre.</font><br>
  <font color='orange'>!Aviso! <br>Para que seu time esteja inscrito no campeonato,<br> Todos devem estar Liberado, caso não esteja, <br>seu time não poderá participar do campeonato
   </font";

}else{
  $validaTimekg = "Bloqueado";
  $validaTK = " <font color='orange'>!!Atenção!! <br>!!Bloqueado!! por favor faça a doação dos 5kg de alimentos não perecíveis <br> na biblioteca para que seu time esteja inscrito no campeonato <br> importante, valide os jogadores do time</font>";
}

?>
<div class="container">
<div class="nometime"><?=$time["nomeTime"]?></div>

    <img class="imglogo" src="<?=$time["logoTime"]?>">

<!--<div class="nomeesituacao">Situação do seu time para o campeonato: <?php //$validaTimekg ?></div>-->
</div>
    <table class="table">
      <thead>
        <tr>
        <th scope="col">Código</th>
          <th scope="col">Jogadores</th>
          <th scope="col">E-mail</th>
          <th scope="col-md-2">Status</th>
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
        <td><?php 
        
        if($nomesjogadores["validaEmail"] == 1){
          $validaEmail = "<font color='#51FF66'>Liberado</font>";
        }else{
          $validaEmail = "<font color='#FF5151'>Bloqueado</font>";
         // $texto = "Falta jogadores validar o e-mail."
        }
        
        
        echo($validaEmail);?></td>
      </tr>
      <?php
  endforeach;
  
      ?> 
      
    </tbody>
    </table>
    
    <a href="../controller/sair.php"><button type="button" class="btn btn-danger" > Sair</button></a>
    <div class="nomeesituacao"><?=$validaTK?></div>
  </main>
  <footer class="footer">
  <div>O objetivo do nosso Projeto alem de colocar em prática o nosso aprendizado, tambem tem o objetivo de arracadar alimentos para pessoas que se encontra em condições de vulnerabilidade social, econômica e/ou cultural. </div>
</footer>
</body>
</html>
<?php 
session_start();
extract($_REQUEST,EXTR_OVERWRITE);

$_SESSION["jogadores"] = array($nomejogador,$fonejogador,$emailjogador,
$nomejogador1,$fonejogador1,$emailjogador1,
$nomejogador2,$fonejogador2,$emailjogador2,
$nomejogador3,$fonejogador3,$emailjogador3,
$nomejogador4,$fonejogador4,$emailjogador4);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel='stylesheet' href='css/estiloescolhernomelogo.css'><link rel="stylesheet" >

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar bg-dark ">
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
        
      <li id="in" class="nav-item">
          <a class="nav-link active text-white" href="../index.php" >Home</a>
      </li>
        
      </ul>

    </div>
  </div>
</div>
</nav>




<main class="container">


<form  action="./viewverificatime.php" method="POST">
<!--<input type="hidden"name="so"  value="<?php // print_r($so array($nomejogador)) ?>">-->




<div class="Nome">
    <div id="nometime" class="col-md-6">
      <label  class="form-label">Nome do time</label>
      <input type="text" class="form-control" name="nometime" id="validationServer01" value="" placeholder="Digite o nome do seu time" required>
    </div>
</div>

<?php


?>

    
  <div class="caixalogo" style="margin-top: 10px;">
    <!-- 1 imagem -->  
<form  action="./viewverificatime.php" method="POST">
    <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Deseja contiar com está logo
    </div>
    <div class="modal-footer">
     <button  class="btn btn-primary" type="$_POST"  name="logo" value="../img/logo.png" >ok</button>
    </div>
  </div>
</div>
</div>
<a  data-bs-toggle="modal" href="#exampleModalToggle1" role="button"><img src="../img/logo.png"  alt="..."></a>

<!--imagem --> 
<!-- 2imagem -->  
<form  action="./viewverificatime.php">
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 1</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Deseja continuar com está logo?
    </div>
    <div class="modal-footer">
     <button  class="btn btn-primary" type="$_POST" name="logo" value="../img/logo1.png" >ok</button>
    </div>
  </div>
</div>
</div>
<a  data-bs-toggle="modal" href="#exampleModalToggle2" role="button"><img src="../img/logo2.png" class="" alt="..."></a>

<!--imagem -->
<!-- 3imagem -->  
<form  action="./viewverificatime.php">
    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Deseja continuar com está logo?
    </div>
    <div class="modal-footer">
     <button  class="btn btn-primary" type="$_POST" name="logo" value="../img/logo1.png" >ok</button>
    </div>
  </div>
</div>
</div>
<a  data-bs-toggle="modal" href="#exampleModalToggle3" role="button"><img src="../img/logo2.png"  alt="..."></a>

<!--imagem --> 

<!-- 4imagem -->  
<form  action="./viewverificatime.php">
    <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Deseja continuar com está logo?
    </div>
    <div class="modal-footer">
     <button  class="btn btn-primary" type="$_POST" name="logo" value="../img/logo1.png" >ok</button>
    </div>
  </div>
</div>
</div>
<a  data-bs-toggle="modal" href="#exampleModalToggle4" role="button"><img src="../img/logo.png"  alt="..."></a>

<!--imagem -->
<!-- 5imagem -->  
<form  action="./viewverificatime.php">
    <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Deseja continuar com está logo?
    </div>
    <div class="modal-footer">
     <button  class="btn btn-primary" type="$_POST" name="logo" value="../img/logo1.png" >ok</button>
    </div>
  </div>
</div>
</div>
<a  data-bs-toggle="modal" href="#exampleModalToggle5" role="button"><img src="../img/logo2.png"  alt="..."></a>
<!--imagem -->
<!--6imagem -->  
<form  action="./viewverificatime.php">
    <div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Deseja continuar com está logo?
    </div>
    <div class="modal-footer">
     <button  class="btn btn-primary" type="$_POST"  name="logo" value="../img/logo.png" >ok</button>
    </div>
  </div>
</div>
</div>
<a  data-bs-toggle="modal" href="#exampleModalToggle6" role="button"><img src="../img/logo.png"  alt="..."></a>
<!--imagem --> 
<!-- 7imagem -->  
<form  action="./viewverificatime.php">
    <div class="modal fade" id="exampleModalToggle7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 1</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Deseja continuar com está logo?
    </div>
    <div class="modal-footer">
     <button  class="btn btn-primary" type="$_POST" name="logo" value="../img/logo1.png" >ok</button>
    </div>
  </div>
</div>
</div>
<a  data-bs-toggle="modal" href="#exampleModalToggle7" role="button"><img src="../img/logo.png" class="" alt="..."></a>

<!--imagem -->
<!-- 8imagem -->  
<form  action="./viewverificatime.php">
    <div class="modal fade" id="exampleModalToggle8" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Deseja continuar com está logo?
    </div>
    <div class="modal-footer">
     <button  class="btn btn-primary" type="$_POST" name="logo" value="../img/logo1.png" >ok</button>
    </div>
  </div>
</div>
</div>
<a  data-bs-toggle="modal" href="#exampleModalToggle8" role="button"><img src="../img/logo2.png"  alt="..."></a>

<!--imagem --> 

<!--9imagem -->  
<form  action="./viewverificatime.php">
    <div class="modal fade" id="exampleModalToggle9" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Deseja continuar com está logo?
    </div>
    <div class="modal-footer">
     <button  class="btn btn-primary" type="$_POST" name="logo" value="../img/logo1.png" >ok</button>
    </div>
  </div>
</div>
</div>
<a  data-bs-toggle="modal" href="#exampleModalToggle9" role="button"><img src="../img/logo2.png"  alt="..."></a>

<!--imagem -->
<!--10imagem -->  
<form  action="./viewverificatime.php">
    <div class="modal fade" id="exampleModalToggle10" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Deseja continuar com está logo?
    </div>
    <div class="modal-footer">
     <button  class="btn btn-primary" type="$_POST" name="logo" value="../img/logo.png" >ok</button>
    </div>
  </div>
</div>
</div>
<a  data-bs-toggle="modal" href="#exampleModalToggle10" role="button"><img src="../img/logo.png"  alt="..."></a>
<!--imagem -->  



<div class="col-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
          <label class="form-check-label" for="invalidCheck3">
            Aceitar termos e condições <link rel="stylesheet" href="">
          </label>
        </div>
      </div>
  </div>

      
</form>
</main>

</body>
</html>
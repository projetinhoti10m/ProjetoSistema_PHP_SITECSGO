<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel='stylesheet' href='./style.css'><link rel="stylesheet" href="./style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>



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
<a class="nav-link active text-white" href="../index.php">Home</a>
</li>



</ul>



</div>
</div>
</div>
</nav>



<main class="container">
<form action="../ViewEscolherCad/escolherlogonome.php" method="POST" class="row g-3">



<div class="titulocad">Inserir os dados dos jogadores:</div>

<div class="col-md-4">
<label class="form-label">Nome do Jogador</label>
<input type="text" name="nomejogador" class="form-control" id="validationServer01" value="" placeholder="Digite seu nome" required>
</div>



<div class="col-md-4">
<label for="validationServer01" class="form-label">Telefone</label>
<input type="number" name="fonejogador" class="form-control" id="validationServer01" value="" placeholder="(00)000000000" required>
</div>





<div class="col-md-4">
<label for="validationServerUsername" class="form-label">E-mail</label>
<div class="input-group has-validation">
<span class="input-group-text" id="inputGroupPrepend3">@</span>
<input type="text" name="emailjogador" class="form-control" id="validationServerUsername" placeholder="Digite um e-mail válido do senac" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
</div>
</div>

<hr/>

<div class="col-md-4">
<label for="validationServer01" class="form-label">Nome do Jogador</label>
<input type="text" name="nomejogador1"class="form-control" id="validationServer01" value="" placeholder="Digite seu nome" required>
</div>



<div class="col-md-4">
<label for="validationServer01" class="form-label">Telefone</label>
<input type="number" name="fonejogador1" class="form-control" id="validationServer01" value="" placeholder="(00)000000000" required>
</div>





<div class="col-md-4">
<label for="validationServerUsername" class="form-label">E-mail</label>
<div class="input-group has-validation">
<span class="input-group-text" id="inputGroupPrepend3">@</span>
<input type="text" name="emailjogador1" class="form-control" id="validationServerUsername" placeholder="Digite um e-mail válido do senac" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
</div>
</div>

<hr/>

<div class="col-md-4">
<label for="validationServer01" class="form-label">Nome do Jogador</label>
<input type="text" name="nomejogador2"class="form-control" id="validationServer01" value="" placeholder="Digite seu nome" required>
</div>



<div class="col-md-4">
<label for="validationServer01" class="form-label">Telefone</label>
<input type="number" name="fonejogador2" class="form-control" id="validationServer01" value="" placeholder="(00)000000000" required>
</div>





<div class="col-md-4">
<label for="validationServerUsername" class="form-label">E-mail</label>
<div class="input-group has-validation">
<span class="input-group-text" id="inputGroupPrepend3">@</span>
<input type="text" name="emailjogador2" class="form-control" id="validationServerUsername" placeholder="Digite um e-mail válido do senac" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
</div>
</div>

<hr/>

<div class="col-md-4">
<label for="validationServer01" class="form-label">Nome do Jogador</label>
<input type="text" name="nomejogador3" class="form-control" id="validationServer01" value="" placeholder="Digite seu nome" required>
</div>



<div class="col-md-4">
<label for="validationServer01" class="form-label">Telefone</label>
<input type="number" name="fonejogador3" class="form-control" id="validationServer01" value="" placeholder="(00)000000000" required>
</div>





<div class="col-md-4">
<label for="validationServerUsername" class="form-label">E-mail</label>
<div class="input-group has-validation">
<span class="input-group-text" id="inputGroupPrepend3">@</span>
<input type="text" name="emailjogador3" class="form-control" id="validationServerUsername" placeholder="Digite um e-mail válido do senac" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
</div>
</div>
<hr/>

<div class="col-md-4">
<label for="validationServer01" class="form-label">Nome do Jogador</label>
<input type="text" name="nomejogador4" class="form-control" id="validationServer01" value="" placeholder="Digite seu nome" required>
</div>



<div class="col-md-4">
<label for="validationServer01" class="form-label">Telefone</label>
<input type="number" name="fonejogador4" class="form-control" id="validationServer01" value="" placeholder="(00)000000000" required>
</div>





<div class="col-md-4">
<label for="validationServerUsername" class="form-label">E-mail</label>
<div class="input-group has-validation">
<span class="input-group-text" id="inputGroupPrepend3">@</span>
<input type="text" name="emailjogador4" class="form-control" id="validationServerUsername" placeholder="Digite um e-mail válido do senac" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
</div>
</div>



<hr/>



<div class="col-6">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
<label class="form-check-label" for="invalidCheck3">Aceitar termos e condições.<a href="">Ler mais</a><link rel="stylesheet" href="">
</label>
<div id="invalidCheck3Feedback" class="invalid-feedback">
You must agree before submitting.
</div>
</div>
</div>
<div class="col-4">
<button class="btn btn-primary" type="submit">Proximo passo</button></a>
</div>



</form>




</main>
<footer class="footer">
<div>O objetivo do nosso Projeto alem de colocar em prática o nosso aprendizado, tambem tem o objetivo de arracadar alimentos para pessoas que se encontra em condições de vulnerabilidade social, econômica e/ou cultural. </div>
</footer>
</body>
</html>
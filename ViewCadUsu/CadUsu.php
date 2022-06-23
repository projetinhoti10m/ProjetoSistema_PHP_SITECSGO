<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilo.css">
    
    
</head>
<body class="body">
<nav class="navbar bg-dark ">
        <div class="container-fluid ">
          <a class="navbar-brand text-white" >Major League</a>
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

        <li class="nav-item">
            <a class="nav-link active text-white" href="../ViewDoc/documentacao.php" >Documentação</a>
          </li>
        
      </ul>

    </div>
  </div>
</div>
</nav>

<main class="container">
<form id="form" action="../controller/inserirJogadores.php" method="GET" class="row g-3">
  <div class="col-md-6">
    <label for="inputnome" class="form-label">Nome</label>
    <input name="nome" type="text" class="form-control" id="validationServer01" value="" placeholder="Digite seu nome" required>
  </div>

  <div class="col-md-6">
    <label for="inputApelido" class="form-label">Apelido</label>
    <input name="apelido" type="text" class="form-control" id="validationServer01" value="" placeholder="Digite seu apelido" required>
  </div>

  
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Telefone</label>
    <input name="fone" type="text" class="form-control" id="validationServer01" value="" placeholder="Digite seu telefone" required>
  </div>

  <div class="col-md-6">
    <label for="inputemail" class="form-label">E-mail</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend3">@</span>
      <input name="email" type="text" class="form-control" id="validationServerUsername" placeholder="Digite um e-mail válido" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
    </div>
  </div>
  
  <div class="col-md-8">
    <label for="inputsenha" class="form-label">Senha</label>
    <input name="senha" type="text" class="form-control " id="validationServer05" aria-describedby="validationServer05Feedback" placeholder="Digite uma senha segura" required>
  </div>

  <div class="col-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
      <label class="form-check-label" for="invalidCheck3">
        Aceitar termos e condições <link rel="stylesheet" href="">
      </label>
      <div id="invalidCheck3Feedback" class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
     <a href=""><button class="btn btn-primary" type="submit">Salvar</button></a>
  </div>
</form>
</main>

<footer class="footer">
  <div >O objetivo do nosso Projeto alem de colocar em prática o nosso aprendizado, tambem tem o objetivo de arracadar alimentos para pessoas que se encontra em condições de vulnerabilidade social, econômica e/ou cultural. </div>
</footer>
</body>
</html>
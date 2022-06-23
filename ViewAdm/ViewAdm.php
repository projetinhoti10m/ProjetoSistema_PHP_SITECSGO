



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
<body class="body1">
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

<main id="main" class="container">
    

       
    <form class="form" action="../controller/admlibera.php" method="POST">
    <div  class="col-md-12">
        <label  for="exampleInputPassword1" class="form-label"><strong>Email</strong></label>
        <input  type="text" name="email" class="form-control" >
      </div>

      <div  class="col-md-12">
        <label  for="exampleInputPassword1" class="form-label"><strong>Senha</strong></label>
        <input  type="password" name="senha" class="form-control" id="exampleInputPassword1">
      </div>
      
      
      <button type="Entar" class="btn btn-primary" style="margin-top: 2%;">Entrar</button>
      
</form>
    
</main>

</body>
</html>
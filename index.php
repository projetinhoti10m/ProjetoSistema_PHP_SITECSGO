<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Major_CSGO</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="ViewHome/css/estilo.css">
</head>

<body background="../img/imgfundo/cs1.jpg">



  <nav class="navbar bg-dark ">
    <div class="container-fluid ">
      <a class="navbar-brand text-white">Major League</a>
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

            <li class="nav-item">
              <a class="nav-link active text-white" href="./ViewEscolherCad/escolherCad.php">Cadastrar seu time</a>
            </li> 

            <!--<li class="nav-item">
              <a class="nav-link active text-black" href="ViewCadUsu/CadUsu.php">Cadastrar</a>
            </li> -->
            <!--<li class="nav-item">
              <a class="nav-link active text-white" href="ViewDoc/documentacao.php">Documentação</a>
            </li>-->

            <li class="nav-item">
              <a class="nav-link active text-white" href="ViewAdm/ViewAdm.php">Adm</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active text-white" href="./ViewP/perguntasfrequentes.php">Perguntas frequentes</a>
            </li>
          </ul>
          
          <form class="login" method="POST" action="./controller/liberaacesso.php">
            <div id="l" class="email" class="mb-6">
              <label for="exampleInputEmail1"><strong>Endereço de E-mail</strong></label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o e-mail do senac" required>
            </div>
            
            <button type="Entar" class="btn btn-primary">Entrar</button>
            <div class="textemail">
            !! Entre com seu e-mail do Senac,<br> para ver mais informações do seu time !!
            </div>
          </form>

          
        </div>
      </div>
    </div>
  </nav>



  <main class="container">
    <div class="logo">
      <img src="img/Banner Major.png" width="100%" height="auto" alt="">
    </div>
<div id="btninscricao"><a href="ViewEscolherCad/escolherCad.php">


<button  id="btninscricao" class="btn btn-success"> Faça a inscrição do seu time aqui</button>
</a>


</div>
    <aside class="infoex">
      <div class="info1">
        <div class="h5t"> Promover um campeonato do Jogo online Counter-Strike: Global Offensive, com 8 times de 5 jogadores em cada um,<br><br> que será transmitido a partida no telão para o público presencial e na plataforma Twitch para o público online, <br>juntamente de um aplicativo mobile, um aplicativo para Windows e um site, todos para auxiliar e facilitar questões de informações e comunicação com o público. <br>Também faremos uma arrecadação de alimentos não Perecíveis para doarmos para uma ONG. </div>
      </div>
    </aside>

    <section>
      <div class="info2">
        <img src="img/timh.png" width="100%" alt="">
      </div>


      <div class="info3">
        <img src="img/gradetimes.gif" width="100%" alt="">
      </div>
    </section>
  </main>




  <footer class="footer">
  <div class="txtf">O objetivo do nosso Projeto alem de colocar em prática o nosso aprendizado, tambem tem o objetivo de arracadar alimentos para pessoas que se encontra em condições de vulnerabilidade social, econômica e/ou cultural. </div>
 
		<br>
		<figure>
			<a href="https://www.instagram.com/major_senac/"target="_blank"> <p>Siga-nos nas Redes Sociais</p><img src="./img/instagram_icon_logo.png" width="70px" title="link para o instagran"></a>
		</figure>
		<br>
</footer>
</body>

</html>

<?php
session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Home - Victoria Gourmet</title>
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>

    <!--inicio do cabeçalho-->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light navbar-transparente">
                <div class="container-fluid">
    <!-- Inicio Logo da navbar-->
            <a href="index.html" class="navbar-brand">
                <img src="img/logo.png" width="280px">
            </a>       
    <!--Fim Logo da navbar-->

    <!--Inicio do menu bars-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <i class="fas fa-bars text-white"></i>
            </button>
    <!--Fim do menu bars-->

    <!--Inicio do das opções do menu-->
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item divisor"></li>
                    <li class="nav-item">
                      <a href="sobrenos.html" class="nav-link">Sobre Nos</a>
                    </li>
                    <li class="nav-item divisor"></li>
                    <li class="nav-item">
                        <a href="bolos.html" class="nav-link">Bolos</a>
                    </li>
                    <li class="nav-item divisor"></li>
                    <li class="nav-item">
                        <a href="docesgourmet.html" class="nav-link">Doces Gourmet</a>
                    </li>
                    <li class="nav-item divisor"></li>
                    <li class="nav-item">
                        <a href="kitfesta.html" class="nav-link">Kit Festas</a>
                    </li>
                    <li class="nav-item divisor"></li>
                    <li class="nav-item">
                    <div class="container text-center">

        <?php
        if(isset($_SESSION['id']) and (isset($_SESSION['nome']))){
            echo "Bem vindo " . $_SESSION['nome'] . "<br>";
            echo "<a href='sair.php'>Sair</a><br>";
        }else{
            echo "<div id='dados-usuario'>";
            echo "<button type='button' class='btn btn-outline-primary m-3' data-bs-toggle='modal' data-bs-target='#loginModal'>Acessar</button>";
            echo "<button type='button' class='btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#cadUsuarioModal'>Cadastrar</button>";
            echo "</div>";
        }

        ?>

    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Área Restrita</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="login-usuario-form">
                        <span id="msgAlertErroLogin"></span>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Usuário:</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Digite o usuário">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="col-form-label">Senha:</label>
                            <input type="password" name="senha" class="form-control" id="senha" autocomplete="on" placeholder="Digite a senha">
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-primary bt-sm" id="login-usuario-btn" value="Acessar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cadUsuarioModal" tabindex="-1" aria-labelledby="cadUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cadUsuarioModalLabel">Cadastrar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="cad-usuario-form">
                        <span id="msgAlertErroCad"></span>

                        <div class="mb-3">
                            <label for="cadnome" class="col-form-label">Nome:</label>
                            <input type="text" name="cadnome" class="form-control" id="cadnome" placeholder="Digite o nome completo">
                        </div>

                        <div class="mb-3">
                            <label for="cademail" class="col-form-label">E-mail:</label>
                            <input type="email" name="cademail" class="form-control" id="cademail" placeholder="Digite o seu melhor e-mail">
                        </div>

                        <div class="mb-3">
                            <label for="cadsenha" class="col-form-label">Senha:</label>
                            <input type="password" name="cadsenha" class="form-control" id="cadsenha" autocomplete="on" placeholder="Digite a senha">
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-success bt-sm" id="cad-usuario-btn" value="Cadastrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                    </li>
                </ul>
            </div>
    <!--Fim do das opções do menu-->
                </div>
            </nav>
            
     <!--Fim do cabeçalho-->
        </header>
        <div class="">
            <span id="msgAlert"></span>
        </div>

        <section id="home" class="d-flex"> <!--Home-->
            <div class="container align-self-center"> <!--Container-->
              <div class="row"> <!--Row-->
                <div class="col-md-12 capa"> 
    <!--Começo dos Slides-->
                    <div id="carouselanuncios" class="carousel slide" data-bs-ride="carouse1">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <h1>A vida é curta demais para poupar na sobremesa!</h1>
                            <a href="#" class="btn btn-lg btn-custom">Aproveite nosso frete gratis</a>
                        </div>

                          <div class="carousel-item">
                            <h1>Um bolo sempre está presente nas celebrações bombásticas</h1>
                            <a href="#" class="btn btn-lg btn-custom">Parcele sua compra sem juros!</a>
                        </div>

                          <div class="carousel-item">
                            <h1>Um dos maiores prazeres da vida é comer um bolo fresquinho</h1>
                            <a href="#" class="btn btn-lg btn-custom">Confira os lançamentos!</a>
                        </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselanuncios" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Antes</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselanuncios" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Depois</span>
                        </button>
                      </div>
    <!--Fim dos Slides-->
                    </div>
                </div>
              </div><!--Row-->
            </div> <!--Container-->
          </section> <!--Home-->

          <section id="servicos">
            <div class="container">
              <div class="row"> <!--Abertura a Row-->
                <div class="col-md-6"> <!--Abertura da Col-->

                  <div class="row albuns">
                    <div class="col-md-6">
                      <img src="img/img1.png" class="img-fluid d-none d-md-block">
                    </div>

                    <div class="col-md-6">
                      <img src="img/img2.png" class="img-fluid d-none d-md-block">
                    </div>
                  </div>

                  <div class="row albuns">
                    <div class="col-md-6">
                      <img src="img/img3.png" class="img-fluid d-none d-md-block">
                    </div>

                    <div class="col-md-6">
                      <img src="img/img4.png" class="img-fluid d-none d-md-block">
                    </div>
                  </div>
                </div><!--Fechamento da Col-->
         <div class="col-md-6">
             <h2>O que nossa loja tem de especial?</h2>

             <h3>Engrediantes com a melhor qualidade.</h3>

             <p>O rigor na escolha de farinhas especiais, ovos frescos, ervas e no cuidado das entregas.</p>
            
            <h3>Novos lançamentos.</h3>

            <p>Todas as semanas um desconto diferente e um lançamento difetente.</p>

            <h3>Não sabe o que comprar para o Dia das Mães?</h3>

            <p> Encontre aqui os melhores presentes!</p>
           
           <h3>Inscreva-se no nosso site e pague com PIX</h3>

           <p>Ao fazer isso voce ganha um desconto e ate mesmo um brinde </p>
           
            </div>       
            </div> <!--Fechamento da Row-->
          </section>

          <footer>
            <div class="container">
              <div class="row">
                <div class="col-md-2">
                  <img src="img/logo.png" width="142">
                </div>
                <div class="col-md-2">
                  <h4>MENU</h4>
                  <ul class="navbar-nav">
                    <li><a href="sobrenos.html">Sobre Nos</a></li>
                    <li><a href="bolos.html">Bolos</a></li>
                    <li><a href="docesgourmet.html">Doces Gourmet</a></li>
                    <li><a href="kitfesta.html">Kit Festas</a></li>
                  </ul>
                </div>
                <div class="col-md-2">
                  <h4>DESENVOLVERDOR</h4>
                  <ul class="navbar-nav">
                    <li><a href=""></a></li>
                    <li><a href="desenvolvedor.html">Desenvolvedores</a></li>
                    <li><a href=""></a></li>
                  </ul>
                </div>
                <div class="col-md-2">
                  <h4>LINKS UTEIS</h4>
                  <ul class="navbar-nav">
                    <li><a href="Suporte.html">Ajuda</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul>
                    <li>
                      <a href="">
                        <img src="img/facebook.png">
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <img src="img/twitter.png">
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <img src="img/instagram.png">
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
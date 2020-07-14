<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <!-- ICONIC CSS -->
    <link href="iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <script src="https://kit.fontawesome.com/de842ded84.js" crossorigin="anonymous"></script>

    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo_blog.css">

    <title>Holder do Tempo</title>

    <link rel="icon" href="img/icone.png">
  </head>
  <body>

    <header><!--inicio cabeçalho -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente ">
        <div class="container">
          <a href="index.html" class="navbar-brand">
            <h5> <img src="img/icone.png" class="img-fluid"> | Holder do Tempo </h5>
          </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a href="index.php" class="nav-link">Home</a>  
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">Cursos</a>  
                  </li>
                  <li class="nav-item">
                      <a href="blog.php" class="nav-link">Blog</a>  
                  </li>

          </div>
      </nav>
    </header><!--Fim cabeçalho -->

    <section id="home_blog" class="d-flex"><!--Inicio Home -->
      <div class="container align-self-center">
        <div class="row">
          <div class="col-md-12"><!-- class capa está no css para centralizar o conteudo-->
              <h1> Está pronto para mudanças? </h1>
          </div>
        </div>
        <div class="row sobreposta">
          <div class="col d-flex">
            <div class="align-self-center mx-auto">
              <div class="row">
              <div class="col-md-6"  >
                <p> Cadastre-se e receba com exclusividade!</p>
             </div>
          <div class="m-1"><!-- class capa está no css para centralizar o conteudo-->
                <form action= "cadastrar_usuarios.php" method="POST" enctype="multipart/form-data" >
                <input type="text" name="nome" class="form-control form-control-md controle_form mb-2 justify-content-center-md ml-5"  placeholder="Nome">
                <input type="email" name="email" class="form-control form-control-md controle_form mb-2 justify-content-center-md ml-5" placeholder="E-mail">
                <input type="submit" value="Cadastrar" class="btn btn-lg btn-outline-light mt-3 botao_principal justify-content-center-md ml-5">
                </form>
                <div class="m-2 justify-content-center-md">
                   <a href="#"><img src="img/whatsapp.png" class="ml-5"> </a>
                 <a href="#"> <img src="img/facebook_icone.png"> </a>
                 <a href="#"> <img src="img/instagram_icone.png"> </a>
                </div>
                </div>
              </div>
              
            </div>
            
          </div>
          
        </div>
      
      </div><!--FIM container-->
    </section><!--Fim Home -->
    
    
   
    
    <section id="recursos" class="m-3"><!--Inicio Recursos -->
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <!- - card 1 - - !>
              <img class="card-img-top img-fluid"src="img/fundopreto1.jpg">
              <h4 class="card-title"> Título do cartão</h4>
              <h6 class="card-subtitle"> subtitulo</h6>         
              <p class="card-text"> Lorem ipsum dolor</p>
              <a href="#" class="btn btn-primary">Leia Mais</a>
  
          </div>
        </div>
            <!- - card 2- - !>
        <div class="col-md-4">
          <div class="card">
            
              <img class="card-img-top img-fluid"src="img/fundopreto1.jpg">
              <h4 class="card-title"> Título do cartão</h4>
              <h6 class="card-subtitle"> subtitulo</h6>         
              <p class="card-text"> Lorem ipsum dolor</p>
              <a href="#" class="btn btn-primary">Leia Mais</a>
  
          </div>
        </div>
        <!- - card 4 - - !>
        <div class="col-md-4">
          <div class="card">
            
              <img class="card-img-top img-fluid"src="img/fundopreto1.jpg">
              <h4 class="card-title"> Título do cartão</h4>
              <h6 class="card-subtitle"> subtitulo</h6>         
              <p class="card-text"> Lorem ipsum dolor</p>
              <a href="#" class="btn btn-primary">Leia Mais</a>
  
          </div>
        </div>
        
      </div> 
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <!- - card 4 - - !>
              <img class="card-img-top img-fluid"src="img/fundopreto1.jpg">
              <h4 class="card-title"> Título do cartão</h4>
              <h6 class="card-subtitle"> subtitulo</h6>         
              <p class="card-text"> Lorem ipsum dolor</p>
              <a href="#" class="btn btn-primary">Leia Mais</a>
  
          </div>
        </div>
            <!- - card 5- - !>
        <div class="col-md-4">
          <div class="card">
            
              <img class="card-img-top img-fluid"src="img/fundopreto1.jpg">
              <h4 class="card-title"> Título do cartão</h4>
              <h6 class="card-subtitle"> subtitulo</h6>         
              <p class="card-text"> Lorem ipsum dolor</p>
              <a href="#" class="btn btn-primary">Leia Mais</a>
  
          </div>
        </div>
        <!- - card 6 - - !>
        <div class="col-md-4">
          <div class="card">
            
              <img class="card-img-top img-fluid"src="img/fundopreto1.jpg">
              <h4 class="card-title"> Título do cartão</h4>
              <h6 class="card-subtitle"> subtitulo</h6>         
              <p class="card-text"> Lorem ipsum dolor</p>
              <a href="#" class="btn btn-primary">Leia Mais</a>
  
          </div>
        </div>
        
      </div> 
    </div>  <!--fIM CONTAINER -->          
          
       
    </section><!--Fim Recursos -->

    <footer><!--Inicio Rodapé -->
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <h2> H.T </h2>
          </div>
          <div class="col-md-2">
            <h4>Company</h4>
            <ul class="navbar-nav">
              <li><a href="">Sobre</a></li>
              <li><a href="">Nosso Time</a></li>
            </ul>
          </div>

          <div class="col-md-2">
            <h4>Conteudos</h4>
            <ul class="navbar-nav">
              <li><a href="">E-books</a></li>
              <li><a href="">Cursos</a></li>
            </ul>
          </div>
          <div class="col-md-2">
           <h4>Ouvidoria</h4>
            <ul class="navbar-nav">
              <li><a href="">Fale Conosco</a></li>
            </ul>
          </div>
           <div class="col-md-4">
            <ul>
              <li><a href=""><img src="img/facebook.png"></a>
              </li>
              <li><a href=""><img src="img/twitter.png"></a>
              </li>
              <li><a href=""><img src="img/instagram.png"></a>
              </li> 
            </ul>
          </div>
          
        </div>
        
      </div>
    </footer><!--Fim Rodapé -->




     <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
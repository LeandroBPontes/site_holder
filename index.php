
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
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Holder do Tempo</title>

    <link rel="icon" href="img/icone.png">
  </head>
  <body>

    <header><!--inicio cabeçalho -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente ">
        <div class="container">
          <a href="index.html" class="navbar-brand">
            <h4 class="disp_movel"> <img src="img/icone.png" class="img-fluid"> <span style="font-size: 20px;"> | Holder do Tempo </span></h4>
          </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse " id="nav-principal">
              <ul class="navbar-nav  margem">
                  <li class="nav-item">
                      <a href="index.html" class="nav-link">Home</a>  
                  </li>
                  <li class="nav-item">
                      <a href="servicos.html" class="nav-link">Serviços</a>  
                  </li>
                  <li class="nav-item">
                      <a href="#servicos" class="nav-link">Cursos</a>  
                  </li>
                  <li class="nav-item">
                      <a href="blog.html" class="nav-link">Blog</a>  
                  </li>

          </div>
      </nav>
    </header><!--Fim cabeçalho -->

    <section id="home" class="d-flex"><!--Inicio Home -->
      <div class="container align-self-center">
        <div class="row">
          <div class="col-md-6" id="textos_conteudo_top"><!-- class capa está no css para centralizar o conteudo-->
              <h2> Está procurando serviços de qualidade pelo menor preço?</h2>
              <p> Aqui na Holder você irá encontrar!</p>
             
                <form action= "conectar_servicos.php" method="POST" enctype="multipart/form-data" >
                <input type="text" name="nome" class="form-control form-control-md controle_form mb-2"  placeholder="Nome">
                <input type="email" name="email" class="form-control form-control-md controle_form mb-2" placeholder="E-mail">
                <input type="tel" name="celular" class="form-control form-control-md controle_form mb-2" placeholder="Celular">
                <input name="servico" list="lista-cursos" placeholder="Selecione o serviço" class="form-control form-control-md controle_form" >
                <datalist  id="lista-cursos">
                <option value="Sites Web">
                <option value="Criação de Logotipos">
                <option value="Edição de Imagem ou Vídeo">
                <option value="Página de Captura">
                </datalist>
                  
                <input type="submit" value="Contratar" class="btn btn-lg btn-outline-light mt-3 botao_principal justify-content-center-md">
                </form>

                <div class="m-2 ">
                 <a href="#"><img src="img/whatsapp.png" class="icone"> </a>
                 <a href="#"> <img src="img/facebook_icone.png"> </a>
                 <a href="#"> <img src="img/instagram_icone.png"> </a>
                </div>
                </div>
                

                  <div class="col-md-6">
                    <div class="carousel slide" data-ride="carousel" id="imagens"><!--Carousel -->
                      <div class="carousel-inner"><!--Inner -->
              
                            <div class="carousel-item active">
                            <img src="img/menino_01.png" class="img-fluid d-none d-md-block">
                            </div>

                            <div class="carousel-item ">
                              <img src="img/mulher_feliz.png" class="img-fluid banner3 d-none  d-md-block">
                            </div>

                            <div class="carousel-item ">
                              <img src="img/logoholder2.png" class="img-fluid banner3 d-none d-md-block">
                            </div>

                      </div><!--/Inner -->
                    </div><!--/Carousel -->

            </div>
          
        </div>
        
      </div>
      
    </section><!--Fim Home -->

    <section id="importancia" class="d-flex"><!--Inicio importancia -->
      <div class="container align-self-center">
        <div class="row">
          <div class="col-md-12"><!-- class capa está no css para centralizar o conteudo-->
              <h1> Por que fazer o seu site com um profissional? </h1>
              <p class="mt-3 mb-5"><b> Sem dúvidas a resposta para essa pergunta é a especificidade!</b><br>
                  Ao contratar um profissional você poderá adequar seus sites às
                  principais caracteristicas do seu negócio, trazendo ainda mais
                  valor ao seu negócio, gerando maior procura e aumentando
                  o valor dos seus serviços!</p>

          </div>
        </div>
      </div><!--FIM container-->
    </section><!--Fim importancia -->

    <section id="servicos"><!--Inicio Servicos -->
      <div class="container">
        <div class="row">
          <div class="col-md-6"> <!-- FOTOS -->
            
            <div class="row albuns"> <!-- primeiras 2 fotos --> <!-- classe albuns em css -->
              <div class="col-md-6">
                <img src="img/img1.jpg" class="img-fluid d-none d-md-block img mb-2">
              </div>
              <div class="col-md-6">
                <img src="img/img2.jpg" class="img-fluid d-none d-md-block img">
              </div>
            </div> <!-- FIM primeiras 2 fotos -->

            <div class="row albuns"><!-- segundas 2 fotos --> <!-- classe albuns em css -->
              <div class="col-md-6">
                <img src="img/img3.jpg" class="img-fluid d-none d-md-block img ">
              </div>
              <div class="col-md-6">
                <img src="img/img4.jpg" class="img-fluid d-none d-md-block img">
              </div>
            </div><!-- segundas 2 fotos -->

         </div>  <!-- Fim coluna de fotos -->
                
             
          
        <!-- TEXTOS -->
        <div class="col-md-6">
            <h2>Do que você precisa?</h2>

            <h3>Página de Captura</h3>
            <p> Crie suas páginas que se adaptam a todos os dispositivos.
                Você poderá criar a sua própria lista de e-mail e fazer
                vendas ou engajamento para o seu cliente!
                </p>


             <h3>Site Web</h3>
             <p>Já pensou em ter um site específico para seu blog
                ou negócio? A Holder tem o melhor time para isso.
                Criamos sites totalmente responsivos que se adaptam
                a todo tipo de tela e oferecemos as melhores ferramentas
                de programação do mercado!</p>
             

             <h3>Edição de Imagem ou Vídeo</h3>
             <p> Está com dificuldades ou sem tempo para edições?
                 Não tem problema, te ajudamos nessa! Vem com a Holder
                 e tenha imagens e vídeos profissionais para seu negócio!</p>

          </div>
        </div>
      </div>
    </section><!--Fim Servicos -->

    <section id="recursos"><!--Inicio Recursos -->
    <div class="container">
      <div class="texto">
      <h2 class="m-5 "> BLOG HOLDER </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card ">
            <!- - imagem 1 - - !>
              <img class="card-img-top"src="https://source.unsplash.com/random/600x200">
              <h4 class="card-title"> Título do cartão</h4>
              <h6 class="card-subtitle"> subtitulo</h6>         
              <p class="card-text"> Lorem ipsum dolor</p>
              <a href="#" class="btn btn-primary ">Leia Mais</a>
  
          </div>
        </div>
            <!- - imagem 2- - !>
        <div class="col-md-4">
          <div class="card">
            
              <img class="card-img-top"src="https://source.unsplash.com/random/600x200">
              <h4 class="card-title"> Título do cartão</h4>
              <h6 class="card-subtitle"> subtitulo</h6>         
              <p class="card-text"> Lorem ipsum dolor</p>
              <a href="#" class="btn btn-primary ">Leia Mais</a>
  
          </div>
        </div>
        <!- - imagem 3 - - !>
        <div class="col-md-4">
          <div class="card">
            
              <img class="card-img-top"src="https://source.unsplash.com/random/600x200">
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
            <!- - imagem 1 - - !>
              <img class="card-img-top"src="https://source.unsplash.com/random/600x200">
              <h4 class="card-title"> Título do cartão</h4>
              <h6 class="card-subtitle"> subtitulo</h6>         
              <p class="card-text"> Lorem ipsum dolor</p>
              <a href="#" class="btn btn-primary">Leia Mais</a>
  
          </div>
        </div>
            <!- - imagem 2- - !>
        <div class="col-md-4">
          <div class="card">
            
              <img class="card-img-top"src="https://source.unsplash.com/random/600x200">
              <h4 class="card-title"> Título do cartão</h4>
              <h6 class="card-subtitle"> subtitulo</h6>         
              <p class="card-text"> Lorem ipsum dolor</p>
              <a href="#" class="btn btn-primary">Leia Mais</a>
  
          </div>
        </div>
        <!- - imagem 3 - - !>
        <div class="col-md-4">
          <div class="card">
            
              <img class="card-img-top"src="https://source.unsplash.com/random/600x200">
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

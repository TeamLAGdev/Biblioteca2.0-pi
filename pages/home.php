<?php
require_once '../class/Conn.class.php';


$recentes = Listar::ListaRecentes();
$fantasia = Listar::ListaFantasia();
$romance = Listar::ListaRomance();
$diversos = Listar::ListaDiversos();
$literatura = Listar::ListaLiteratura();
$terror = Listar::ListaTerror();
// var_dump($recentes);

?>


<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <link rel="shortcut icon" href="../img/img/images.png" type="image/x-icon">
  <title>Biblioteca ETE</title>





  <!-- Bootstrap core CSS -->

  <meta name="theme-color" content="#7952b3">

  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    body {
      background-color: rgb(39, 39, 39) !important;
    }
    
  </style>


  <!-- Custom styles for this template -->
  <link href="../css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
  <!-- <div class="container"> -->
   <div id="loading">
    <img src="http://media.giphy.com/media/FwviSlrsfa4aA/giphy.gif" style="width:150px;height:150px;" />
</div>
<div id="conteudo">



  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">Biblioteca ETE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#destaque">Destaque</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#livros">Livros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contato">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sugestoes.php">Sugestões</a>
          </li>
        </ul>
        <form class="d-flex" method="GET" action="pesquisar.php">
          <input class="form-control me-2" type="text" name="pesquisa" placeholder="faça sua pesquisa" aria-label="Search" required>
          <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
        </form>
      </div>
    </div>
  </nav>

  <main>
    <div class="main-movie" id="home">
      <div class="container">
        <h3 class="title-movie">TEAMLAG DEV</h3>
        <div class="buttons">
          <a href="#contato">
            <button role="button" class="button">
              <i class="fas fa-play"></i>
              SIGA-NOS NAS REDES
            </button>
          </a>
          <a href="#contato">
            <button role="button" class="button">
              <i class="fas fa-info-circle"></i>
              MAIS INFORMAÇÕES
            </button>
          </a>
        </div>
      </div>
    </div>
  </main>
  <section>


    <div class="carousel-movie" id="destaque">
      <h3 style="color:white;">Recentes</h3>
      <div class="owl-carousel owl-theme">
        <?php
        foreach ($recentes as $produto) {
        ?>
          <div class="item" style="min-height:385px; max-height: 390px;">
            <a href="produto.php?id=<?= $produto->id ?>"><img style="max-height: 390px; min-height:385px;" src="../img/img/<?php echo $produto->img ?>" alt="" srcset=""></a>
          </div>
        <?php  } ?>
      </div>
    </div>
    <div class="carousel-movie">
      <h3 style="color:white;">Fantasia</h3>
      <div class="owl-carousel owl-theme" id="livros">
        <?php
        foreach ($fantasia as $produto) {
        ?>
          <div class="item" style="min-height:385px; max-height: 390px;">
            <a href="produto.php?id=<?= $produto->idProduto ?>"><img style="max-height: 390px; min-height:385px;" src="../img/img/<?php echo $produto->img ?>" alt="" srcset=""></a>
          </div>
        <?php  } ?>
      </div>
    </div>
    <div class="carousel-movie">
      <h3 style="color:white;">Romance</h3>
      <div class="owl-carousel owl-theme" id="livros">
        <?php
        foreach ($romance as $produto) {
        ?>
          <div class="item" style="min-height:385px; max-height: 390px;">
            <a href="produto.php?id=<?= $produto->idProduto ?>"><img style="max-height: 390px; min-height:385px;" src="../img/img/<?php echo $produto->img ?>" alt="" srcset=""></a>
          </div>
        <?php  } ?>
      </div>
    </div>
    <div class="carousel-movie">
      <h3 style="color:white;">Diversos</h3>
      <div class="owl-carousel owl-theme" id="livros">
        <?php
        foreach ($diversos as $produto) {
        ?>
          <div class="item" style="min-height:385px; max-height: 390px;">
            <a href="produto.php?id=<?= $produto->id ?>"><img style="max-height: 390px; min-height:385px;" src="../img/img/<?php echo $produto->img ?>" alt="" srcset=""></a>
          </div>
        <?php  } ?>
      </div>
    </div>
    <div class="carousel-movie">
      <h3 style="color:white;">Literatura</h3>
      <div class="owl-carousel owl-theme" id="livros">
        <?php
        foreach ($literatura as $produto) {
        ?>
          <div class="item" style="min-height:385px; max-height: 390px;">
            <a href="produto.php?id=<?= $produto->idProduto ?>"><img style="max-height: 390px; min-height:385px;" src="../img/img/<?php echo $produto->img ?>" alt="" srcset=""></a>
          </div>
        <?php  } ?>
      </div>
    </div>
    <div class="carousel-movie">
      <h3 style="color:white;">Terror</h3>
      <div class="owl-carousel owl-theme" id="livros">
        <?php
        foreach ($terror as $produto) {
        ?>
          <div class="item" style="min-height:385px; max-height: 390px;">
            <a href="produto.php?id=<?= $produto->idProduto ?>"><img style="max-height: 390px; min-height:385px;" src="../img/img/<?php echo $produto->img ?>" alt="" srcset=""></a>
          </div>
        <?php  } ?>
      </div>
    </div>
  </section>
  <!-- </div> -->

  <!-- linkando os arquivos Owl Carousel 2 js -->
   <!-- Footer -->
    <footer class="bg-dark text-center text-white" id="contato">
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://m.facebook.com/etesurubim2" role="button"><i class="fab fa-facebook-f"></i></a>

          <!-- Instagram -->
          <a class="btn btn-outline-light btn-floating m-1" target="_blank"  href="https://www.instagram.com/eteantonioarrudadefarias/?utm_medium=copy_link" role="button"><i class="fab fa-instagram"></i></a>

     

      
        </section>
        <!-- Section: Social media -->

        <!-- Section: Form -->
        <section class="">
          <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Biblioteca online ETE</strong>
                </p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-auto">
                  <!-- Submit button -->

                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
          </form>
        </section>
        <!-- Section: Form -->

        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            Não hospedamos livros em nossos servidores, apenas o indexamos.
          </p>
        </section>
        <!-- Section: Text -->

        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->

            <!--Grid column-->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" target="_blank" href="mailto:teamlag434@gmail.com">TeamLagdev</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>

    <script src="../js/jquery-1.8.3.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/setup.js"></script>
    <script src="../js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Sugestões</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/img/images.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <style>
     .form-sugestao{
         background-image: url("https://www.surubimnews.com.br/wp-content/uploads/2019/02/ETE-ETE-ETE-1140x620.png");
         width: 100%;
         max-width: 100%;
         opacity: 0.8;
    

     }
     body{
        background-color: rgb(39, 39, 39) !important;
     }
     .form-sugestao{
        margin-top: 50px;
        padding: 100px;
     }
     footer{
         margin-top: 350px;
     }
     .recebida{
         color: white;
         text-align: center;
     }
 </style>
</head>
<!-- Custom styles for this template -->
<link href="../css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
  <!-- <div class="container"> -->


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
            <a class="nav-link" href="home.php">Destaque</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">Livros</a>
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

    <div class="container">
        <div class="imagem"></div>
    
        <form method="POST" action="envio.php" class="form-sugestao">
             <h2>Envie sua Sugestão:</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email:</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Sua Sugestão:</label>
                <textarea type="text" class="form-control" name="sugestao" id="exampleInputPassword1" required></textarea>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
            </div>
            <button type="submit" class="btn btn-primary" value="Enviar">Enviar</button>
                <?php if (isset($_GET['result']) && $_GET['result'] == 0) {
            echo '<h2 class="recebida">Sugestão não recebida</h2>';
        } else {
            if (isset($_GET['result']) && $_GET['result'] == 1) {
                echo '<h2 class="recebida">Sugestão recebida</h2>';
            }
        } ?>
        </form>
       
    </div>
 </div>
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
                  <strong>Biblioteca online Ete</strong>
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
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    

</body>

</html>
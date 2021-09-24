<?php
require_once '../class/Conn.class.php';

$produto = Listar::getProdutoById($_GET['id']);
$comentario = Comentario::MostrarComentario($_GET['id']);

if(isset($_POST['nome']['mensagem'])) {
$inserir = Comentario::InserirComentario($_GET['id'],$_POST['nome'],$_POST['mensagem']);
}


?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Leonardo">
  <meta name="generator" content="Hugo 0.88.1">
  <link rel="shortcut icon" href="../img/img/images.png" type="image/x-icon">
  <title>Biblioteca ETE</title>





  <!-- Bootstrap core CSS -->

  <meta name="theme-color" content="#7952b3">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />




  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    .col-md-6 {
      margin-left: -10px;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    body {
      background-color: rgb(39,39,39) !important;
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
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">Destaque</a>
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

  <div class="container">


    <div class="row">


      <div class="col-md-6" style="text-align: center;" id="livros">
        <img src="../img/img/<?= $produto->img; ?>" width="250px" title="" alt="" alt="">
      </div>

      <div class="col-md-6">
        <table class="table" style="color: white;">
          <thead>
            <tr>
              <th scope="col">Nome:</th>
              <th scope="col text-center">
                <?= $produto->nome_livro; ?>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Autor: </th>
              <td>
                <?= $produto->autor; ?>
              </td>
            </tr>
            <tr>
              <th scope="row">Categoria: </th>
              <td>
                <?= $produto->nome_genero?>
              </td>
            </tr>
            <tr>
              <th scope="row">Descrição: </th>
              <td>
                <?= $produto->descricao ?>
              </td>
            </tr>

            </tr>

          </tbody>
        </table>
        <div class="row">
          <div class="col-md-12">
            <!--<a href="../control/produto.php?id=<? //=$produto->id;
                                                    ?>" class="btn btn-lg btn-success">LER</a>-->
            <a href="<?= $produto->link ?>" target="_blank" class="btn btn-lg btn-success">LER</a>
          </div>

        </div>
      </div>
    </div>
    <div class="comentario" style="margin-top: 10px;">
      <h3 style="color: white;">Faça seu comentário:</h3>
      <fieldset>
        <form class="barracomen" method="POST" action="produto.php?id=<?php echo $_GET['id'] ?>">
          <h4 style="color: white;">Nome:</h4><br />
          <input type="text" name="nome" required /><br /><br />

          <h4 style="color: white;">Mensagem:</h4><br />
          <textarea name="mensagem" required></textarea><br /><br />

          <input class="btn btn-primary btn-lg" type="submit" value="Enviar Mensagem" />
        </form>
      </fieldset>
      <br /><br />
      <h3 id="texto"style="color: white;">Comentários:</h3>
      <?php
      if ($comentario == null) {
        echo '<h3>Nenhum comentário</h3>';
      } else {


        foreach ($comentario as $a) {

      ?>
          <div class="comentariofeitos">
            <div class="mensagens">
              <div class="mensagem">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="color: white;">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
                <p class="user" style="display:inline;color: white;"><?php echo $a->nome; ?></p>
                <p style="display:inline;color: white;"><?php echo $a->data_comentario; ?></p>

              </div style="color: white;">
             <p style="color: white;"> <?php echo $a->mensagem; ?></p>
            </div>

          </div>
      <?php }
      }

      ?>
   </div>
 </div>
 </div>
     <!-- Footer -->
<footer class="bg-dark text-center text-white" id="contato"  style="margin-top: 100px;">
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

 </div>
      <script src="../js/jquery-1.8.3.min.js"></script>
      <script src="../js/owl.carousel.min.js"></script>
      <script src="../js/setup.js"></script>
      <script src="../js/script.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</body>

</html>
<?php
require_once '../class/Conn.class.php';

$produto = Listar::getProdutoById($_GET['id']);
$comentario = Comentario::MostrarComentario($_GET['id']);

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
      background-color: rgb(71, 70, 70) !important;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../css/navbar-top-fixed.css" rel="stylesheet">
</head>

<body>

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
        <table class="table">
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
    <div class="comentario">
      <h3>Faça seu comentário:</h3>
      <fieldset>
        <form class="barracomen" method="POST">
          Nome:<br />
          <input type="text" name="nome" required /><br /><br />

          Mensagem:<br />
          <textarea name="mensagem" required></textarea><br /><br />

          <input class="btn btn-primary btn-lg" type="submit" value="Enviar Mensagem" />
        </form>
      </fieldset>
      <br /><br />
      <h3 id="texto">Comentários:</h3>
      <?php
      if ($comentario == null) {
        echo "<h3>Nenhum comentário</h3>";
      } else {


        foreach ($comentario as $a) {

      ?>
          <div class="comentariofeitos">
            <div class="mensagens">
              <div class="mensagem">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <p class="user" style="display:inline;"><?php echo $a->nome; ?></p>
                <p style="display:inline;"><?php echo $a->data_comentario; ?></p>

              </div>
              <?php echo $a->mensagem; ?>
            </div>

          </div>
      <?php }
      }

      ?>
         
         <footer class="pt-4 my-md-5 pt-md-5 border-top" id="contato">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="./img/produto/logo.png" alt="" width="60px">
        <small class="d-block mb-3 text-muted">&copy; 2020–2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Desenvolvedores</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Leonardo Marcelo</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">André Lucas</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Gabriel Gomes</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team LAG</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Redes Sociais</h5>
        <ul class="list-unstyled text-small">


          <li class="mb-1"><a class="link-secondary text-decoration-none" target="_blank" href="https://m.facebook.com/etesurubim2" > <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" style="margin-left:27;">
           <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
           </svg></a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none"  target="_blank" href="https://www.instagram.com/eteantonioarrudadefarias/?utm_medium=copy_link"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" style="margin-left:27;">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </svg> </a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none"  target="_blank" href="#">Fale conosco</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="http://etesurubim.pe.gov.br/index.php"  target="_blank">site ete</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Sobre</h5>
        <ul class="list-unstyled text-small">
        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#"> Desenvolvedor: teamlag434@gmail.com</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Não hospedamos livros em nossos servidores apenas o indexamos</a></li>

        </ul>
      </div>
    </div>
  </footer>

      <script src="../js/jquery.min.js"></script>
      <script src="../js/owl.carousel.min.js"></script>
      <script src="../js/setup.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</body>

</html>
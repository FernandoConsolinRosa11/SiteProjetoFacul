<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mercado BelaVista</title>
  <base href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilo.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
</head>

<body>
  <nav class="navbar navbar-expand-lg sm sticky-top">
    <div class="container-fluid" data-aos="fade-right">
      <!-- LOGO -->
      <a class="navbar-brand" href="home" title="Logo">
        <img src="img/logonew.png" alt="logo" class="logo" style="width: 120px;">
      </a>

      <!-- BOTÃO PARA MENU COLAPSÁVEL NO MOBILE -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- LINKS DO MENU -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home" title="Início">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ofertas" title="Ofertas">Ofertas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="novidades" title="Novidades">Novidades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato" title="Contato">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <?php
    if (isset($_GET['param'])) {
      $param = $_GET['param'];
      //separar o parametor por /
      $p = explode("/", $param);
      //print_r($_GET);
    }
    $page = $p[0] ?? "home";
    $ofertas = $p[1] ?? "ofertas";

    if ($page == "ofertas") {
      $pagina = "paginas/{$ofertas}.php";
    } else {
      $pagina = "paginas/{$page}.php";
    }
    //verificar se a página existe
    if (file_exists($pagina)) {
      include $pagina;
    } else {
      include "paginas/erro.php";
    }
    ?>
  </main>
  <script src="js/aos.js"></script>
  <script src="js/fslightbox.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"></script>
  <script src="js/aos.js"></script>
  <script src="js/fslightbox.js"></script>
  <script src="js/jquery-1.11.3.min"></script>

  </script>
  <footer class="footer w-100">
    <p class="mx-auto p-2 text-center">
      <a href="..."><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" title="Facebook" />
        </svg></a>

      <a href="https://www.instagram.com/mercadobelavista8/?next=%2F" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
          <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
          <path d="M16.5 7.5v.01" title="Instagram" />
        </svg></a>
    </p>
    <p class="mx-auto p-2 text-center text-white">Desenvolvido por Fernando Consolin Rosa</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  <script src="js/verificacao.js">
  </script>
</body>

</html>
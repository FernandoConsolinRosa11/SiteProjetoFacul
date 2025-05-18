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
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
 <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="home"><img src="img/logo2.png" alt="logo" class="w-25"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ofertas">Ofertas</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="novidades">Novidades</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="contato">Contato</a>
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
    $ofertas = $p[1] ?? null;
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
  <footer class="footer w-100">
    <p>Desenvolvido por Fernando Consolin Rosa</p>
  </footer>











  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
</body>

</html>
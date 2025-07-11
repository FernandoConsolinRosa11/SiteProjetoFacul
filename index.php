<?php
$produtos = json_decode(file_get_contents('js/produtos.json'), true);

function exibirProdutos($produtos, $tipoFiltro)
{
  $produtosFiltrados = array_filter($produtos, function ($produto) use ($tipoFiltro) {
    return $produto['tipo'] === $tipoFiltro;
  });

  shuffle($produtosFiltrados);

  foreach ($produtosFiltrados as $produto) {
    echo '<div class="grade">';
    echo '<img src="' . $produto['imagem'] . '" alt="produto ' . $produto['nome'] . '" class="w-100">';
    echo '<p class="text-center"><strong>' . $produto['nome'] . '</strong></p>';
    echo '<span class="text-center text-success">R$ ' . number_format($produto['preco'], 2, ',', '.') . '</span>';
    echo '<div class="text-center d-block d-md-none my-4">';
    echo '<a href="contato" class="especial">Compre já</a>';
    echo '</div>';
    echo '</div>';
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mercado Bela Vista</title>
  <base href="http://localhost/DevModerna/SiteMercadoBelaVista/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilo.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
  <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
  <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
  <style>
    @media (max-width: 991.98px) {
      .navbar-brand img {
        margin-left: 40px;
        transform: scale(2.5);
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid d-flex " data-aos="fade-right">

      <!-- LOGO -->
      <div class="navbar-brand">
        <a href="home">
          <img src="img/logonew.png" alt="logo" title="Logo" style="width:15%;">
        </a>
      </div>

      <!-- BOTÃO PARA MENU COLAPSÁVEL NO MOBILE -->
      <button class="navbar-toggler position-absolute end-0 me-3" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation" style="background-color: white; border: 1px solid black">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- LINKS DO MENU -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="home" title="Início">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ofertas" title="Ofertas">Ofertas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato" title="Contato">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
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
  <footer class="w-100 text-white pt-4 px-3">
    <!-- Redes sociais -->

    <div class="d-flex justify-content-center gap-4 mb-3">
      <a href="https://whats.link/mercadobelavista" target="_blank" title="WhatsApp" class="text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="icon icon-tabler icon-tabler-brand-whatsapp">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
          <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
        </svg>
      </a>
      <a href="https://www.instagram.com/mercadobelavista8/?next=%2F" target="_blank" title="Instagram"
        class="text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="icon icon-tabler icon-tabler-brand-instagram">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
          <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
          <path d="M16.5 7.5v.01" />
        </svg>
      </a>
    </div>

    <!-- Conteúdo principal -->
    <div class="container">
      <div class="row text-center text-md-start">
        <!-- Pagamento -->
        <div class="col-md-6 mb-4">
          <p class="fw-bold">Formas de Pagamento</p>
          <!-- Imagem para telas grandes -->
          <img src="img/formasdep.png" alt="formas de pagamento" class="img-fluid w-75 d-none d-md-block">

          <!-- Imagem para telas pequenas -->
          <img src="img/formasdepresp.png" alt="formas de pagamento responsivo"
            class="img-fluid w-75 d-block d-md-none mx-auto">
        </div>
        <!-- Avisos -->
        <div class="col-md-6">
          <p class="fw-bold">Informações Importantes</p>
          <p class="small">
            *Informamos que os preços, ofertas e condições de pagamento são exclusivos para internet válidos para o dia
            de hoje, podendo sofrer alterações sem aviso prévio.
          </p>
          <p class="small">
            *O pedido será concluído de acordo com a disponibilidade em nosso estoque. Caso ocorra a falta de algum
            item, este não será entregue e o valor correspondente não será cobrado.
          </p>
          <p class="small">
            *Pedidos pelo whatsapp somente até 18:30h
            E aos Domingos pedidos para a Entrega até 10:30.
          </p>
          <p class="small">
            *O valor mínimo para cada pedido é de R$ 25,00.
          </p>
        </div>
      </div>
    </div>

    <!-- Rodapé final -->
    <div class="text-center mt-3 pb-3">
      <p class="mb-0 small fw-bold">&copy;2025 Mercado Bela Vista - Todos os direitos reservados</p>
    </div>
  </footer>


  <script src="js/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"></script>
  <script src="js/aos.js"></script>
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"></script>
  </script>
  <script src="js/verificacao.js"></script>
  <script src="js/VerMaisBtn.js"></script>
  <script src="https://kit.fontawesome.com/963c23cf13.js" crossorigin="anonymous"></script>
</body>

</html>
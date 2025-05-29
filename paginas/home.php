<main class="main">
  <div id="carouselExampleAutoplaying" class="carousel slide w-100" data-bs-ride="carousel" >
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="img/banner1.png" class="d-block w-100" alt="..." style="height: 400px; object-fit: fill;">
      </div>
      <div class="carousel-item">
        <img src="img/banner2.png" class="d-block w-100" alt="..." style="height: 400px; object-fit: fill;">
      </div>
      <div class="carousel-item">
        <img src="img/banner3.png" class="d-block w-100 " alt="..." style="height: 400px; object-fit: fill;">
      </div>
       <div class="carousel-item">
        <img src="img/banner4.png" class="d-block w-100" alt="..." style="height: 400px; object-fit: fill;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>
  
  <section id="quemsomos" class="bg-blue">
    <h2 class="title text-white"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="1.55" stroke-linecap="round" stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-users-group ">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
        <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1" />
        <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
        <path d="M17 10h2a2 2 0 0 1 2 2v1" />
        <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
        <path d="M3 13v-1a2 2 0 0 1 2 -2h2" />
      </svg>QUEM SOMOS</h2>
  
  
    <div class="container py-4" data-aos="zoom-in">
    <div class="row align-items-center">
  
      <!-- Imagem -->
      <div class="col-md-6 mb-3 mb-md-0">
        <img src="img/Screenshot_1.png" alt="Mercado Bela Vista" class="img-fluid rounded">
      </div>
  
      <!-- Texto -->
      <div class="col-md-6 text-white">
        <p>
          O Mercado Bela Vista foi fundado em 1993, na cidade de Terra Boa, Paraná, pelos sócios
          Benedito Aparecido Consolin e Claudia Greici Consolin. Localizado na Avenida Melvin Jones, nº 221, o
          estabelecimento surgiu com o propósito de atender à comunidade local, oferecendo produtos de qualidade e um
          atendimento próximo e familiar. Ao longo dos anos, o mercado consolidou-se como referência no comércio da
          região, graças ao compromisso dos fundadores com a honestidade, o respeito e a dedicação ao cliente. Com uma
          trajetória marcada pelo trabalho e pela confiança da população, o Mercado Bela Vista tornou-se símbolo de
          tradição e desenvolvimento para a cidade.
        </p>
      </div>
  
    </div>
  </div>
  
  <section id="produtos">
  
    <h2 class="text-blue text-center mb-4">
      <svg  xmlns="http://www.w3.org/2000/svg"  width="60"  height="60"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-bolt"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M13 2l.018 .001l.016 .001l.083 .005l.011 .002h.011l.038 .009l.052 .008l.016 .006l.011 .001l.029 .011l.052 .014l.019 .009l.015 .004l.028 .014l.04 .017l.021 .012l.022 .01l.023 .015l.031 .017l.034 .024l.018 .011l.013 .012l.024 .017l.038 .034l.022 .017l.008 .01l.014 .012l.036 .041l.026 .027l.006 .009c.12 .147 .196 .322 .218 .513l.001 .012l.002 .041l.004 .064v6h5a1 1 0 0 1 .868 1.497l-.06 .091l-8 11c-.568 .783 -1.808 .38 -1.808 -.588v-6h-5a1 1 0 0 1 -.868 -1.497l.06 -.091l8 -11l.01 -.013l.018 -.024l.033 -.038l.018 -.022l.009 -.008l.013 -.014l.04 -.036l.028 -.026l.008 -.006a1 1 0 0 1 .402 -.199l.011 -.001l.027 -.005l.074 -.013l.011 -.001l.041 -.002z" /></svg>
      Ofertas
    </h2>
  
    <div class="container-flex" data-aos="zoom-in">
      <?php exibirProdutos($produtos, 'carne'); ?>
    </div>
  
    <!-- BOTÃO CENTRALIZADO -->
    <div class="text-center mt-4 mb-5" data-aos="zoom-in">
      <a href="ofertas" class="especial px-4 py-2">Ver mais ofertas!</a>
    </div>
    <br>
  </section>
  
  <section id="localizacao" class="bg-blue ">
    <h2 class="title text-white"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"
        fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-map-pin">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path
          d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" />
      </svg>Localização</h2>
    <div class="container" data-aos="zoom-in">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.2844789835212!2d-52.45309392536527!3d-23.772882069395894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed69f9bffb726b%3A0x50069958cb717bc3!2sAv.%20Melvin%20Jones%2C%20239%20-%20Jardim%20S%C3%A3o%20Pedro%2C%20Terra%20Boa%20-%20PR%2C%2087240-000!5e0!3m2!1spt-BR!2sbr!4v1747515151222!5m2!1spt-BR!2sbr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" class="w-100">
      </iframe>
    </div>
  </section>
</main>
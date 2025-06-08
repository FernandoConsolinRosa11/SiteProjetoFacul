<main class="main">
  <div id="carouselExampleAutoplaying" class="carousel slide w-100" data-bs-ride="carousel" data-bs-interval="5000">
    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img src="img/banner1.png" class="d-block w-100" alt="Banner1" style="height: 400px; object-fit: fill;">
      </div>
      <div class="carousel-item">
        <img src="img/banner2.png" class="d-block w-100" alt="Banner2" style="height: 400px; object-fit: fill;">
      </div>
      <div class="carousel-item">
        <img src="img/banner3.png" class="d-block w-100 " alt="Banner3" style="height: 400px; object-fit: fill;">
      </div>
       <div class="carousel-item">
        <img src="img/banner4.png" class="d-block w-100" alt="Banner4" style="height: 400px; object-fit: fill;">
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
  
  <section id="quemsomos" class="bg-blue pt-5" >
    <h2 class="title text-white"><i class="fa-solid fa-users m-2"></i>QUEM SOMOS</h2>
  
  
    <div class="container py-4" data-aos="zoom-in">
    <div class="row align-items-center">
  
      <!-- Imagem -->
      <div class="col-md-6 mb-3 mb-md-0">
        <img src="img/Screenshot_1.png" alt="Mercado Bela Vista" class="img-fluid rounded">
      </div>
  
      <!-- Texto -->
      <div class="col-md-6 text-white">
        <p class="lh-lg fs-5">
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
  </section>
  <section id="produtos">
  
    <h2 class="title text-blue text-center mb-4 ">
      <i class="fa-solid fa-bolt"></i>
      Ofertas
      <i class="fa-solid fa-bolt"></i>
    </h2>
  
    <div class="container-flex" data-aos="zoom-in">
      <?php exibirProdutos($produtos, 'carne'); ?>
    </div>
  
    <!-- BOTÃO CENTRALIZADO -->
    <div class="text-center mt-4 mb-5" data-aos="zoom-in">
      <a href="ofertas" class="especial px-4 py-2"><i class="fa-solid fa-fire m-1"></i>Ver mais ofertas<i class="fa-solid fa-fire m-1"></i></a>
    </div>
    <br>
  </section>
  
  <section id="localizacao" class="bg-blue m-0">
    <h2 class="title text-white"><i class="fa-solid fa-location-dot m-1"></i>Localização</h2>
    <div class="container" data-aos="zoom-in">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.2844789835212!2d-52.45309392536527!3d-23.772882069395894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed69f9bffb726b%3A0x50069958cb717bc3!2sAv.%20Melvin%20Jones%2C%20239%20-%20Jardim%20S%C3%A3o%20Pedro%2C%20Terra%20Boa%20-%20PR%2C%2087240-000!5e0!3m2!1spt-BR!2sbr!4v1747515151222!5m2!1spt-BR!2sbr"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade" class="w-100">
      </iframe>
    </div>
  </section>
</main>
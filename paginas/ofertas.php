<main class="main">
    <h2 class="text-center text-blue title"><i class="fa-solid fa-bolt"></i>OFERTAS IMPERDÍVEIS<i class="fa-solid fa-bolt"></i></h2>
    <p class="text-center">Os produtos abaixo são uma pequena parcela dos itens em oferta, caso deseje ter acesso aos
        demais
        produtos,entre em contato direto conosco através da página de contato ou pelas redes sociais.</p>
    <section id="produtos">
        <h2 class="text-blue">Carnes</h2>
        <div class="container-flex">
            <?php exibirProdutos($produtos, 'carne'); ?>
        </div>

        <h2 class="text-blue">Bebidas</h2>
        <div class="container-flex">
            <?php exibirProdutos($produtos, 'bebida'); ?>
        </div>

        <br>

        <p class="text-center"><a href="contato" class="especial">Garanta já o seu <i class="fa-solid fa-cart-shopping m-1"></i></a></p>
    </section>
</main>
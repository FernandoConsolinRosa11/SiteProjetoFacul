<main class="main m-3">
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

        <h2 class="text-blue">Achocolatado</h2>
        <div class="container-flex">
            <?php exibirProdutos($produtos, 'achocolatado'); ?>
        </div>
        
        <br>

        <p class="text-center mt-4 mb-5" ><a href="contato" class="especial p-3" >Garanta já o seu <i class="fa-solid fa-cart-shopping m-1"></i></a></p>
    </section>
</main>
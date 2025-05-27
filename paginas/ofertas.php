<?php
$produtos = json_decode(file_get_contents('js/produtos.json'), true);

function exibirProdutos($produtos, $tipoFiltro)
{
    foreach ($produtos as $produto) {
        if ($produto['tipo'] === $tipoFiltro) {
            echo '<div class="grade">';
            echo '<img src="' . $produto['imagem'] . '" alt="' . $produto['nome'] . '" class="w-100">';
            echo '<p class="text-center"><strong>' . $produto['nome'] . '</strong></p>';
            echo '<p class="text-center text-success">R$ ' . number_format($produto['preco'], 2, ',', '.') . '</p>';
            echo '<p class="text-center display-none"><a href="" class="especial">Compre já!</a></p>';
            echo '</div>';
        }
    }
}
?>

<h2 class="text-center text-blue title">OFERTAS IMPERDÍVEIS!</h2>
<p class="text-center">Os produtos abaixo são relacionados à churrascaria e afins, caso deseje ter acesso aos demais
    produtos em oferta,entre em contato direto conosco através da página de contato ou pelas redes sociais.</p>
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
    <div class="">
        <p class="text-center"><a href="" class="especial">Compre já!</a></p>
    </div>
</section>
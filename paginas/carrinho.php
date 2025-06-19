<main class="main">
    <div class="container">
        <h2 class="mb-4 title text-blue">Meu Carrinho</h2>

        <table class="table table-bordered" id="tabela-carrinho">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Produto</th>
                    <th class="text-center">Preço</th>
                    <th class="text-center">Qtd</th>
                    <th class="text-center">Total</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <h4>Total Geral: R$ <span id="total-geral">0.00</span></h4>

        <div class="text-center">
            <a href="ofertas" class="especial m-2">Continuar comprando<i class="fa-solid fa-arrow-rotate-left m-1"></i></a>
            <button class="especial m-2" onclick="limparCarrinho()">Limpar Carrinho<i class="fa-solid fa-broom m-1"></i></button>
            <button class="especial m-2" onclick="finalizarCompra()">Finalizar Compra<i class="fa-solid fa-check m-1"></i></button>
        </div>
    </div>
    <br>
</main>
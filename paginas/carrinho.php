<main class="main">
    <div class="container">
        <h2 class="mb-4 title text-blue">🛒 Meu Carrinho</h2>

        <table class="table table-bordered" id="tabela-carrinho">
            <thead class="table-dark">
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Qtd</th>
                    <th>Total</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <h4>Total Geral: R$ <span id="total-geral">0.00</span></h4>

        <button class="especial mt-3" onclick="limparCarrinho()">🧹 Limpar Carrinho</button>
        <a href="ofertas" class="especial mt-3">← Continuar comprando</a>
    </div>

    <script src="js/paginacarrinho.js"></script>
</main>
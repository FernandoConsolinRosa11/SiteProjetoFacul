
  let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

  function salvarCarrinho() {
    localStorage.setItem("carrinho", JSON.stringify(carrinho));
  }

  function adicionarAoCarrinho(id, nome, preco) {
    const existente = carrinho.find(p => p.id === id);
    if (existente) {
      existente.qtd += 1;
    } else {
      carrinho.push({ id, nome, preco, qtd: 1 });
    }
    salvarCarrinho();
    alert(nome + " adicionado ao carrinho!");
  }

  document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".btn-add-carrinho").forEach(botao => {
      botao.addEventListener("click", function () {
        const id = this.getAttribute("data-id");
        const nome = this.getAttribute("data-nome");
        const preco = parseFloat(this.getAttribute("data-preco"));
        adicionarAoCarrinho(id, nome, preco);
      });
    });
  });

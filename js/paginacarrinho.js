let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

function atualizarCarrinho() {
  const tbody = document.querySelector("#tabela-carrinho tbody");
  const totalGeral = document.getElementById("total-geral");
  tbody.innerHTML = "";
  let total = 0;

  carrinho.forEach((item, index) => {
    let subtotal = item.preco * item.qtd;
    total += subtotal;

    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${item.nome}</td>
      <td>R$ ${item.preco.toFixed(2)}</td>
      <td>${item.qtd}</td>
      <td>R$ ${subtotal.toFixed(2)}</td>
      <td><button class="btn btn-sm btn-danger" onclick="removerItem(${index})">Remover</button></td>
    `;
    tbody.appendChild(row);
  });

  totalGeral.textContent = total.toFixed(2);
}

function removerItem(index) {
  carrinho.splice(index, 1);
  localStorage.setItem("carrinho", JSON.stringify(carrinho));
  atualizarCarrinho();
}

function limparCarrinho() {
  if (confirm("Tem certeza que deseja limpar o carrinho?")) {
    carrinho = [];
    localStorage.removeItem("carrinho");
    atualizarCarrinho();
  }
}

document.addEventListener("DOMContentLoaded", atualizarCarrinho);

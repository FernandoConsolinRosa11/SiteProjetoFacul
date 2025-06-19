// Função para inicializar o carrinho, carregando do localStorage ou criando um array vazio
let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

/**
 * Atualiza a exibição do carrinho na tabela e o total geral.
 */
function atualizarCarrinho() {
  const tbody = document.querySelector("#tabela-carrinho tbody");
  const totalGeralElement = document.getElementById("total-geral"); // Renomeado para evitar conflito com 'total' interno
  tbody.innerHTML = ""; // Limpa o conteúdo atual da tabela
  let total = 0;

  // Itera sobre cada item no carrinho para criar as linhas da tabela
  carrinho.forEach((item, index) => {
    // Calcula o subtotal do item (preço * quantidade)
    let subtotal = item.preco * item.quantidade;
    total += subtotal; // Adiciona ao total geral

    // Cria uma nova linha para a tabela
    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${item.nome}</td>
      <td>R$ ${item.preco.toFixed(2).replace('.', ',')}</td>
      <td>${item.quantidade}</td>
      <td>R$ ${subtotal.toFixed(2).replace('.', ',')}</td>
      <td>
        <button class="btn btn-sm btn-danger" onclick="removerItem(${index})">Remover</button>
      </td>
    `;
    tbody.appendChild(row); // Adiciona a linha à tabela
  });

  // Atualiza o texto do elemento que exibe o total geral
  totalGeralElement.textContent = total.toFixed(2).replace('.', ',');

  // Salva o carrinho atualizado no localStorage para garantir consistência
  localStorage.setItem("carrinho", JSON.stringify(carrinho));
}

/**
 * Remove um item do carrinho com base no seu índice.
 * @param {number} index O índice do item a ser removido.
 */
function removerItem(index) {
  carrinho.splice(index, 1); // Remove o item do array
  atualizarCarrinho(); // Atualiza a exibição do carrinho
}

/**
 * Limpa todos os itens do carrinho após confirmação do usuário.
 */
function limparCarrinho() {
  if (confirm("Tem certeza que deseja limpar o carrinho?")) {
    carrinho = []; // Esvazia o array do carrinho
    localStorage.removeItem("carrinho"); // Remove o item 'carrinho' do localStorage
    atualizarCarrinho(); // Atualiza a exibição do carrinho
  }
}

// Quando a página é carregada, atualiza o carrinho para exibir os itens existentes
document.addEventListener("DOMContentLoaded", atualizarCarrinho);
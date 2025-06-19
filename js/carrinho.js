// carrinho.js

document.addEventListener('DOMContentLoaded', () => {
    // Seleciona todos os botões com a classe 'adicionar-ao-carrinho'
    const botoesAdicionar = document.querySelectorAll('.adicionar-ao-carrinho');

    botoesAdicionar.forEach(botao => {
        botao.addEventListener('click', (event) => {
            // Pega os dados do item diretamente do atributo data-item
            const itemString = event.target.dataset.item;
            const item = JSON.parse(itemString); // Converte a string JSON de volta para objeto

            adicionarItemAoCarrinho(item);
            alert(`${item.nome} foi adicionado ao carrinho!`); // Feedback visual simples
        });
    });

    function adicionarItemAoCarrinho(item) {
        let carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];

        // Verifica se o item já está no carrinho
        const itemExistente = carrinho.find(produto => produto.id === item.id);

        if (itemExistente) {
            // Se o item já existe, incrementa a quantidade
            itemExistente.quantidade = (itemExistente.quantidade || 1) + 1;
        } else {
            // Se o item não existe, adiciona-o ao carrinho com quantidade 1
            item.quantidade = 1;
            carrinho.push(item);
        }

        // Salva o carrinho atualizado no localStorage
        localStorage.setItem('carrinho', JSON.stringify(carrinho));
        console.log('Carrinho atualizado:', carrinho);

        // Opcional: Redirecionar para a página do carrinho após adicionar
        // window.location.href = 'carrinho.php';
    }
});
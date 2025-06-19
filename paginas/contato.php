<main class="main m-3">
  <h2 class="title text-blue text-center mb-4">ENTRE EM CONTATO</h2>
  <div class="container">
    <form method="post" class="w-100">
      <div class="row g-3 mb-3">
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Nome..." id="nome" required>
        </div>
        <div class="col-md-6">
          <input type="tel" class="form-control" placeholder="Número de telefone..." id="tel" required>
        </div>
      </div>
      <div class="col-12 mb-3">
        <input type="email" class="form-control" placeholder="Email..." id="email" required>
      </div>

      <div class="row g-3 mb-3">
        <div class="col-md-9">
          <input type="text" class="form-control" placeholder="Endereço..." id="endereco">
        </div>
        <div class="col-md-3">
          <input type="number" class="form-control" placeholder="Número da residência..." id="numero">
        </div>
      </div>

      <div class="mb-3">
        <textarea name="msg" id="msg" rows="5" class="form-control" placeholder="Escreva sua mensagem..."
          required></textarea>
      </div>

      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
        <label class="form-check-label" for="consent">
          Aceito os termos e condições
        </label>
      </div>

      <div class="text-center">
        <button type="submit" class="especial btn" id="btn">Enviar mensagem<i
            class="fa-solid fa-paper-plane m-2"></i></button>
      </div>
    </form>
    <br>
  </div>
</main>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const mensagem = localStorage.getItem('mensagemContato');
    const textarea = document.getElementById('mensagem');

    if (mensagem && textarea) {
      textarea.value = mensagem;

      // Limpa dados após preenchimento
      localStorage.removeItem('mensagemContato');
      localStorage.removeItem('carrinho');
    }
  });
</script>

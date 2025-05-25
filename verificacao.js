document.getElementById("btn").onclick = function () {
  let nome = document.getElementById("nome").value.trim();
  let email = document.getElementById("email").value.trim();
  let endereco = document.getElementById("endereco").value.trim();
  let numero = document.getElementById("numero").value.trim();
  let box = document.getElementById("consent").checked;
  let mensagem = document.getElementById("msg").value.trim();

  let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  if (!nome || !email || !mensagem || !endereco || !numero || !box) {
    alert("Por favor, preencha todos os campos e aceite os termos.");
    return;
  }

  if (!emailRegex.test(email)) {
    alert("Informe um email válido.");
    return;
  }
  //confirmar campos:
  if (
    nome != "" &&
    email != "" &&
    emailRegex.test(email) &&
    mensagem != "" &&
    endereco != "" &&
    numero != "" &&
    box == true
  ) {
    alert("Sua mensagem foi enviada com sucesso!");
  }
   // Número do WhatsApp 
    let numeroWhats = "4499583036"; 

    let texto = `Olá! Gostaria de entrar em contato:\n` +
                `*Nome:* ${nome}\n` +
                `*Email:* ${email}\n` +
                `*Endereço:* ${endereco},\n nº ${numero}\n` +
                `*Mensagem:* ${mensagem}\n`;

    // Abre o WhatsApp com a mensagem
    window.open(`https://wa.me/${numeroWhats}?text=${encodeURIComponent(texto)}`, '_blank');
};

document.getElementById("verMaisBtn").addEventListener("click", function () {
  const itensOcultos = document.querySelectorAll(".display-none");

  itensOcultos.forEach(item => {
    item.style.display = "block";
  });

  this.style.display = "none"; // esconde o botão depois de clicar
});

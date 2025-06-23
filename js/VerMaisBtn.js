document.getElementById("verMaisBtn").addEventListener("click", function () {
  const itensOcultos = document.querySelectorAll(".display-none");
  const estaMostrando = this.textContent === "Esconder";

  itensOcultos.forEach(item => {
    item.style.display = estaMostrando ? "none" : "block";
  });

  this.textContent = estaMostrando ? "Ver mais" : "Esconder";
});

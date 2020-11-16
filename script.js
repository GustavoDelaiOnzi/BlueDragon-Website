document.querySelector(".botao-menu").
addEventListener("click", () => {
    document.querySelector(".container").classList.toggle("change");
});

function compraClick(nome){
    texto = "Compra de "
    alert(texto.concat(nome, " efetuada com sucesso"));
}
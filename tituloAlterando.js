function alterarTitulo() {
    var titleElement = document.getElementById("alterarTitulo");
    var currentTitle = titleElement.innerText;
    var newTitle = currentTitle === "Exercícios - Hildi OwO" ? "Exercícios - Hildi -w-" : "Exercícios - Hildi OwO";
    titleElement.innerText = newTitle;
}

setInterval(alterarTitulo, 1000); // Alterna a cada 1 segundo (1000 milissegundos)
document.addEventListener("DOMContentLoaded", function() {
    const botoesAdicionar = document.querySelectorAll(".adicionar");
    const listaCarrinho = document.getElementById("lista-carrinho");
    const totalCarrinho = document.getElementById("total");
    let total = 0;

    botoesAdicionar.forEach(botao => {
        botao.addEventListener("click", function() {
            const item = botao.parentElement;
            const nome = item.querySelector("h1").textContent;
            const precoTexto = item.querySelector("h2").textContent;
            const preco = parseFloat(precoTexto.replace("R$", ""));
            
            const itemCarrinho = document.createElement("li");
            itemCarrinho.textContent = `${nome} - R$ ${preco.toFixed(2)}`;
            
            const botaoExcluir = document.createElement("button");
            botaoExcluir.textContent = "Excluir";
            botaoExcluir.addEventListener("click", function() {
                listaCarrinho.removeChild(itemCarrinho);
                total -= preco;
                totalCarrinho.textContent = `R$ ${total.toFixed(2)}`;
            });
            
            itemCarrinho.appendChild(botaoExcluir);
            listaCarrinho.appendChild(itemCarrinho);

            total += preco;
            totalCarrinho.textContent = `R$ ${total.toFixed(2)}`;
        });
    });
});
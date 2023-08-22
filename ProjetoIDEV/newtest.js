document.addEventListener("DOMContentLoaded", function() {
    const botoesAdicionar = document.querySelectorAll(".adicionar");
    const divItem1 = document.getElementById("item1");
    const divItem2 = document.getElementById("item2");
    const totalCarrinho = document.getElementById("total");
    let total = 0;

    botoesAdicionar.forEach(botao => {
        botao.addEventListener("click", function() {
            const item = botao.parentElement;
            const nome = item.querySelector("h3").textContent;
            const precoTexto = item.querySelector("p").textContent;
            const preco = parseFloat(precoTexto.replace("Preço: R$ ", ""));
            
            const divItemCarrinho = document.createElement("div");
            divItemCarrinho.textContent = `${nome} - R$ ${preco.toFixed(2)}`;
            
            const botaoExcluir = document.createElement("button");
            botaoExcluir.textContent = "Excluir";
            botaoExcluir.addEventListener("click", function() {
                if (divItem1.contains(divItemCarrinho)) {
                    divItem1.removeChild(divItemCarrinho);
                } else if (divItem2.contains(divItemCarrinho)) {
                    divItem2.removeChild(divItemCarrinho);
                }
                total -= preco;
                totalCarrinho.textContent = `R$ ${total.toFixed(2)}`;
            });
            
            divItemCarrinho.appendChild(botaoExcluir);
            if (botao.parentElement === document.querySelector(".item:nth-child(1)")) {
                divItem1.appendChild(divItemCarrinho);
            } else if (botao.parentElement === document.querySelector(".item:nth-child(2)")) {
                divItem2.appendChild(divItemCarrinho);
            }

            total += preco;
            totalCarrinho.textContent = `R$ ${total.toFixed(2)}`;
        });
    });
});
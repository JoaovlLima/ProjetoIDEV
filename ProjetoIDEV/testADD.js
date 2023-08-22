
document.addEventListener("DOMContentLoaded", function() {
    const botoesAdicionar = document.querySelectorAll(".adicionar");
    const tabelaCarrinho = document.querySelector(".tabela-car-pop tbody");
    const totalCarrinho = document.getElementById("total");
    let total = 0;

    botoesAdicionar.forEach((botao, index) => {
        botao.addEventListener("click", function() {
            const item = botao.parentElement;
            const nome = item.querySelector("h1").textContent;
            const precoTexto = item.querySelector("h2").textContent;
            const preco = parseFloat(precoTexto.replace("R$", ""));
            
            const tr = document.createElement("tr");

            const tdProduto = document.createElement("td");
            const imgNomeCategoriaDiv = document.createElement("div");
            imgNomeCategoriaDiv.classList.add("img-pop-carr");
            imgNomeCategoriaDiv.innerHTML = `
                <img src="https://picsum.photos/200/300" alt="">
                <div class="name-pop-carr">
                    <h2>${nome}</h2>
                    <div class="Categoria">
                        <h2>Categoria</h2>
                    </div>
                </div>`;
            tdProduto.appendChild(imgNomeCategoriaDiv);
            tr.appendChild(tdProduto);

            const tdPreco = document.createElement("td");
            tdPreco.innerHTML = `<h2>R$ ${preco.toFixed(2)}</h2>`;
            tr.appendChild(tdPreco);

            const tdQuantidade = document.createElement("td");
            const quantityContainer = document.createElement("div");
            quantityContainer.classList.add("quantity-container");
            quantityContainer.innerHTML = `
                <button class="quantity-button" id="decrease">-</button>
                <input class="quantity-input" type="number" id="quantity" min="1" value="1">
                <button class="quantity-button" id="increase">+</button>`;
            tdQuantidade.appendChild(quantityContainer);
            tr.appendChild(tdQuantidade);

            const tdTotal = document.createElement("td");
            tdTotal.textContent = `R$ ${preco.toFixed(2)}`;
            tr.appendChild(tdTotal);

            const tdExclusao = document.createElement("td");
            tdExclusao.classList.add("Exclusao-pop-carr");
            const botaoExcluir = document.createElement("button");
            botaoExcluir.innerHTML = `<i class='bx bx-x' alt="Exclusao"></i>`;
            botaoExcluir.addEventListener("click", function() {
                tabelaCarrinho.removeChild(tr);
                total -= preco;
                totalCarrinho.textContent = `R$ ${total.toFixed(2)}`;
            });
            tdExclusao.appendChild(botaoExcluir);
            tr.appendChild(tdExclusao);

            tabelaCarrinho.appendChild(tr);

            total += preco;
            totalCarrinho.textContent = `R$ ${total.toFixed(2)}`;
        });
    });
});
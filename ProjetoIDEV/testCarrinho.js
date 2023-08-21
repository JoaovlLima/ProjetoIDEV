
document.getElementById("adicionarBotao").addEventListener("click", function () {
    var tbody = document.getElementById("carrinho");

    var novaLinha = document.createElement("tr");
    novaLinha.innerHTML = `
        <td>
            <div class="img-pop-carr">
                <img src="URL_DA_IMAGEM_NOVO_PRODUTO" alt="">
                <div class="name-pop-carr">
                    <h1>NOME NOVO PRODUTO</h1>
                    <div class="Categoria">
                        <h2>Categoria</h2>
                    </div>
                </div>
            </div>
        </td>
        <td>R$xxxxxx</td>
        <td>
            <div class="qtd-carr-pop">
                <button>-</button>
                <span>1</span>
                <button>+</button>
            </div>
        </td>
        <td>R$xxxxxx</td>
        <td class="Exclusao-pop-carr">
            <button>
                <i class='bx bx-x' alt="Exclusão"></i>
            </button>
        </td>
    `;

    tbody.appendChild(novaLinha);
});
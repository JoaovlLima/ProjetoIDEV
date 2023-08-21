/* window.onload = function() {
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get("senhasDiferentes") === "true") {
        ativarPopUp();
    }
}; */

function ativarLogin(){
   
    
    var loginAtivar = document.getElementById("areaLogin")
    var divEmbaca = document.getElementById("fundoEmbacado")
    
    divEmbaca.style.filter = "blur(5px)";
    loginAtivar.style.display = "block";
    
      
    }
    
   function ativarCarrinho(){
var carrinhoAtivar = document.getElementById("surgirCarrinho")
var divEmbaca = document.getElementById("fundoEmbacado")
divEmbaca.style.filter = "blur(5px)";
carrinhoAtivar.style.display = "block";
    
   }

   const quantityInput = document.getElementById('quantity');
        const increaseButton = document.getElementById('increase');
        const decreaseButton = document.getElementById('decrease');

        increaseButton.addEventListener('click', () => {
            const currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        });

        decreaseButton.addEventListener('click', () => {
            const currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });


////////// ADD novo Produto ////////////////

function adicionarAoCarrinho(nome, imagem, preco) {
    var tbody = document.getElementById("carrinho");

    var novaLinha = document.createElement("tr");
    novaLinha.innerHTML = `
        <td>
            <div class="img-pop-carr">
                <img src="${imagem}" alt="${nome}">
                <div class="name-pop-carr">
                    <h1>${nome}</h1>
                    <div class="Categoria">
                        <h2>Categoria</h2>
                    </div>
                </div>
            </div>
        </td>
        <td>${preco}</td>
        <td>
            <div class="qtd-carr-pop">
                <button>-</button>
                <span>1</span>
                <button>+</button>
            </div>
        </td>
        <td>${preco}</td>
        <td class="Exclusao-pop-carr">
            <button>
                <i class='bx bx-x' alt="Exclusão"></i>
            </button>
        </td>
    `;

    tbody.appendChild(novaLinha);
}

       


    
    
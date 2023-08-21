<?php
function adicionarProdutoAoCarrinho($produto_id) {
    // Aqui você pode colocar a lógica de adicionar o produto ao carrinho usando o $produto_id
}

if (isset($_POST["produto_id"])) {
    $produto_id = $_POST["produto_id"];
    adicionarProdutoAoCarrinho($produto_id);
    // Responder à solicitação AJAX
}
?>
<script>
document.querySelectorAll('.adicionar-ao-carrinho').forEach(function(button) {
    button.addEventListener('click', function() {
        var produtoID = button.getAttribute('data-id');
        adicionarAoCarrinho(produtoID);
    });
});

function adicionarAoCarrinho(produtoID) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'funcoes.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.status === 'success') {
                alert(response.message);
            } else {
                alert(response.message);
            }
        }
    };
    xhr.send('produto_id=' + produtoID);
}
</script>
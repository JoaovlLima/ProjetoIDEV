<?php
session_start();
 /* print_r([$_REQUEST]); */

if(isset($_POST['submit'])&& !empty($_POST['email'])&&!empty($_POST['senha'])){
include_once('config.php');

$emailLog = $_POST['email'];
$senhaLog = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$emailLog' and senha = '$senhaLog'";
$result = $conexao->query($sql);
if(mysqli_num_rows($result)<1){
   unset($_SESSION['email']);
   unset($_SESSION['senha']); 

   $emailExiste = false;
   header('Location: Cadastro.php');
}else{
    $_SESSION['email'] = $emailLog;
    $_SESSION['senha'] = $senhaLog;


}


}else{
    
}

/* if(isset($_POST['submit'])){
$email = $_POST["email"];
$iniciais = '';
if (empty($email)) {
    $iniciais = "USU";
} else {
    // Obtém as duas primeiras letras do email
    $iniciais = substr($email, 0, 2);
}
} */
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../ProjetoIDEV/css/style.css">
   <link rel="stylesheet" href="test.css">

</head>

<body>
    <nav class="areaEmbacada" id="fundoEmbacado">
    <header>
        <div class="heading">
            <a href=""><img src="/ProjetoIDEV/img/Icons/facebook PNG.png" alt=""></a>
            <a href=""><img src="/ProjetoIDEV/img/Icons/whatsapp.png" alt=""></a>
            <a href=""><img src="/ProjetoIDEV/img/Icons/facebook.png" alt=""></a>
        </div>

        <nav class="navbar">
            <div class="logo-nav">
                <img src="/ProjetoIDEV/img/Icons/t (1).png" alt="">
                <img src="/ProjetoIDEV/img/Icons/t.png" alt="">
                <div class="texto-nav">
                    <a href="/ProjetoIDEV/index.html">HOME</a>
                    <a href="/ProjetoIDEV/prodGeral.html">PRODUTOS</a>
                    <a href="">CADASTRO</a>
                    <button onclick="ativarLogin()">Ativar Login</button>
                    <button onclick="ativarCarrinho()"> Carrinho</button>
                 
                    <a href="/ProjetoIDEV/faq.html">FAQ</a>
                    

                </div>
                <br><br><br>

                 <!-- DIV USUÁRIO -->
                <div class="layoutUsuario" id ="layUsuario">
                    <br>
                <?php
                
                 if (isset($_POST['submit'])) {
                     $email = $_POST["email"];
                     $iniciais = '';

                     if (empty($email)) {
                         $iniciais = "USU";
                     } else {
                         $iniciais = substr($email, 0, 2);
                         $iniciais = strtoupper($iniciais);
                         echo "<span style='font-size: 40px;'>$iniciais</span>";
                     }
                 }
                
            

                ?>
                    </div>
            </div>
            
        </nav>
    </header>
    <div class="carr-princ-ind">
        <!-- BOOTSTRAP -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<div class="camada1">
    <div class="tit-carr-meio">
        <h1>ESCOLHA SEU PREFERIDO!</h1>
        <!-- DESCOBRIR COMO FAZER -->
    </div>


    <div class="tit-card-ind">
        <h1>FAÇA SUA ESCOLHA!</h1>

        <div class="espaco-card">

            <a href="">
                <div class="card1">
                    <h1>PIZZA</h1>

                </div>
            </a>
            <a href="">
                <div class="card2">
                    <h1>BURGUER</h1>
                </div>
            </a>
            <a href="">
                <div class="card3">
                    <h1>SORVETE</h1>
                </div>
            </a>
            <a href="">
                <div class="card4">
                    <h1>ESFIHA</h1>
                </div>
            </a>
            <a href="">
                <div class="card5">
                    <h1>FRITOS</h1>
                </div>
            </a>
            <a href="">
                <div class="card6">
                    <h1>GOURMET</h1>
                </div>
            </a>
        </div>

        <div class="btn-card">
            <input src="/ProjetoIDEV/prodGeral.html" type="submit" value="VEJA MAIS!" >
        </div>
    </div>
</div>
</nav>

<!-- DIV LOGIN  -->
<div class="camada2" id="areaLogin">
    <div class="container" id="containerLogin">
        
       
        <h2>Login</h2>
            <form action="" method="POST">
              
           <br>
        <input type="text" placeholder="E-mail" id="email" name="email" required>
           <br><br>   
             
        <input type="password" placeholder="Senha" id="senha"  name="senha" required>
              
             <br><br>
        <input type="submit" value="Entrar" name="submit" id="submit">
        </form>
        <a href="" class="cad">Cadastrar -se </a>
  
        </div>
</div>

<!-- DIV CARRINHO -->
<div class="carrinho" id="surgirCarrinho">

        <div class="espaco-carr">
            <div class="tit-carr-pop">
                <h1>SEU CARRINHO</h1>
            </div>
            <div class="espaco-table-pop">
                <div class="tabela-car-pop">
                    <table>
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Total</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td>
                                    <div class="img-pop-carr">
                                        <img src="https://picsum.photos/200/300" alt="">

                                        <div class="name-pop-carr">
                                            <h1>NOME PRODUTO</h1>
                                            <div class="Categoria">
                                                <h2>Categoria</h2>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>R$xxxxxx</td>
                                <td>
                                <div class="quantity-container">
        <button class="quantity-button" id="decrease">-</button>
        <input  class="quantity-input" type="number" id="quantity" min="1" value="1">
        <button class="quantity-button" id="increase">+</button>
    </div>
                                </td>
                                <td>R$xxxxxx</td>
                                <td class="Exclusao-pop-carr">
                                    <button>
                                        <i class='bx bx-x' alt="Exclusao"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        

                    </table>
                </div>
            </div>
            <div class="container-btn-carr-pop">
                <a href=""><button>
                        CONTINUAR
                    </button>
                </a>
            </div>
        </div>

    
</div>

    <div class="carr-inf-ind">
        <img src="" alt="NÃO CAIA EM GOLPE!">
    </div>
    <footer>
        <div class="espaco-foot">
            <ul>
                <li><a href="">HOME</a> </li>
                <li><a href="">PRODUTOS</a></li>
                <li><a href="">CADASTRO</a></li>
                <li><a href="">FAQ</a></li>
            </ul>
            <div class="contat-ind">

                <img src="/ProjetoIDEV/img/Icons/facebook PNG.png" alt="">
                <img src="/ProjetoIDEV/img/Icons/whatsapp.png" alt="">
                <img src="/ProjetoIDEV/img/Icons/facebook PNG.png" alt="">

                <div class="foot-baixo-img">
                    <img src="" alt="Linha">
                    <h2>@Copyrint 2023</h2>
                </div>
            </div>
            <div class="img-foot-logo">
                <img src="/ProjetoIDEV/img/Icons/t (1).png" alt="">
            </div>
        </div>
    </footer>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"

        crossorigin="anonymous"></script>  -->
        <script src="Login.js"></script>
</body>

</html>
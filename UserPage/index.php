<?php
session_start();
?>

<html>

<head>
    <title>CSD | Prod.</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a0544da68a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>
    <nav class="sidebar">
        <div class="sidebar-title">MENU</div>
        <ul>
            <li><a href="../index.php"><span class="fa-solid fa-house"></span>Início </a></li>
            <li><a href="">Carrinho <span class="fa-solid fa-cart-shopping"></span></a></li>
            <li><a href="">Minhas compras <span class="fa-solid fa-bag-shopping"></span></a></li>
            <li><a href="">Favoritos <span class="fa-regular fa-star"></span></a></li>
            <li><a href="">Caixa de mensagens <span class="fa-solid fa-envelope"></span></a></li>
            <li><a href="">Cupons <span class="fa-solid fa-ticket"></span></a></li>
            <li><a href="">Feedback <span class="fa-solid fa-comment"></span></a></li>
            <div class="down">
                <ul>
                    <li><a href=""><span class="fa-solid fa-gear"></span> Configurações </a></li>
                    <li><a href=""><span class="fa-regular fa-circle-question"></span>Ajuda</a></li>
                    <li><a href="../data/logout.php"><span class="fa-solid fa-arrow-right-from-bracket"></span> Sair </a></li>
                </ul>
            </div>
        </ul>
    </nav>
    <header>
        <div class="wide-1">
            <div class="bar-1">
                <ul>
                    <li>CATIVO STORE</li>
                </ul>
            </div>
            <div class="acount-title">Bem vindo!</div>
            <div class="acount-info">
                <ul>
                    <li><img src="./img/user_comum.png" alt=""></li>
                    <li class="column-1">
                        <ul>
                            <h3>Informações Pessoais</h3>
                            <li>Nome do Usuário</li>
                            <li>E-mail</li>
                            <li>Telefone</li>
                            <li>Senha</li>
                        </ul>
                    </li>
                    <li class="column-2">
                        <ul>
                            <h3>Informações de Endereço</h3>
                            <li>Rua</li>
                            <li>Bairro</li>
                            <li>Estado</li>
                            <li>CEP</li>
                        </ul>
                    </li>
                    <li class="column-3">
                        <ul>
                            <h3>Informações de Pagamento</h3>
                            <li>
                                <input type="radio" name="card-1">
                                <label for="card-1"> CRÉDITO FINAL XXXX-XXXX-XXXX-5652</label>
                            </li>
                            <li>
                                <input type="radio" name="card-2">
                                <label for="card-2"> CRÉDITO FINAL XXXX-XXXX-XXXX-2546</label>
                            </li>
                            <li>
                                <input type="radio" name="card-3">
                                <label for="card-3"> CRÉDITO FINAL XXXX-XXXX-XXXX-1377</label>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="btn-1">
                <button id="editBtn">
                    EDITAR<span class="fa-solid fa-pen-to-square"></span>
                </button>
            </div>
            <div class="container">
                <form action="" id="editForm">
                    <legend>Alteração de cadastro</legend>
                    <ul>
                        <li><input type="text" id="editName" placeholder="Nome"></li>
                        <li><input type="mail" id="editMail" placeholder="E-mail"></li>
                        <li><input type="tel" id="editTel" placeholder="Telefone"></li>
                    </ul>
                </form>
            </div>


        </div>
    </header>

    <script src="./script.js"></script>
</body>

</html>
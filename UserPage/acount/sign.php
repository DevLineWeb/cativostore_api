<?php

if (isset($_POST['submit'])) {
    //print_r($_POST['nome']);
    //print_r($_POST['email']);
    //print_r($_POST['senha']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $result = mysqli_query($conect, "INSERT INTO Csd_Users(nome, mail, senha) VALUES('$nome','$email','$senha')");
}

?>

<html>

<head>
    <title>CSD</title>
    <link rel="stylesheet" type="text/css" href="sign.css">
</head>

<body>
    <header>
        <nav class="menu">
            <ul>
                <li><a href="http://localhost/Cativo_Store/index.html">HOME</a></li>
                <li><a href="">Store</a></li>
                <li><a href="">Categorias</a>
                    <ul>
                        <li><a href="">Cat01</a></li>
                        <li><a href="">Cat02</a></li>
                        <li><a href="">Cat03</a></li>
                        <li><a href="">Cat04</a></li>
                        <li><a href="">Cat05</a></li>
                        <li><a href="">Cat06</a></li>
                    </ul>
                </li>
                <li><a href="">Destaques</a>
                    <ul>
                        <li><a href="">Dest01</a></li>
                        <li><a href="">Dest02</a></li>
                        <li><a href="">Dest03</a></li>
                        <li><a href="">Dest04</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="box">
            <form action="sign.php" method="POST">
                <img src="./img/logo.png" alt="">
                <fieldset>
                    <legend>CADASTRO</legend>
                    <br>
                    <div class="inputbox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="name" class="inputLabel">Nome Completo</label>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="inputLabel">E-mail</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="inputLabel">Senha</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="senha2" id="senha2" class="inputUser" required>
                        <label for="senha2" class="inputLabel">Confirmar Senha</label>
                    </div>
                    <br>
                    <input class="submit" type="submit" name="submit" id="submit">
                </fieldset>
                <div class="buttons">
                    <a href="./login.html"><button type="button" class="efeito efeito-1">Fazer login</button></a>
                </div>
            </form>
        </div>
    </main>
    <header class="layer-5">
        <div class="background-3">
            <div class="text-end">
                <h2>2021 Web World. All rights reserved. Theme by Catto</h2>
            </div>
        </div>

    </header>
</body>

</html>
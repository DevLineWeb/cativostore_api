<?php
include_once("../data/config.php");
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CSD | Company</title>
</head>

<body>
    <header>
        <nav class="navBar">
            <main>
                <div class="logo"><a href=""> Cativo Store </a></div>
                <ul>
                    <li class="navItem"><a href="">Store</a></li>
                    <li class="navItem"><a href="">About</a></li>
                    <li class="navItem"><a href="">More</a></li>
                </ul>
            </main>
        </nav>
    </header>
    <div class="boxForm">
        <legend>Acesso ao Portal</legend>
        <form action="./login.php" method="POST">
            <label for="mail">Digite Seu E-mail:</label>
            <input class="formCamp" name="mail" id="mail" type="mail" required>
            <br><br>
            <label for="pass">Digite Sua Senha:</label>
            <input class="formCamp" name="password" id="password" type="password" required>
            <input class="sendBtn" type="submit" name="submit" id="submit" value="ENTRAR ">
            <a class="signBtn" href="">Cadastre-se<i class="fa-solid fa-user-plus"></i></a>
        </form>
    </div>

</body>
<script src="https://kit.fontawesome.com/a0544da68a.js" crossorigin="anonymous"></script>

</html>
<?php
include_once('../data/config.php');

if($_SESSION['admin_perm']='0'){
    header('Location: ../index.php');
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>CSD | Portal</title>
</head>

<body>
    <header>
        <nav class="navBar">
            <main>
                <div class="logo"><a href=""> Cativo Portal </a></div>
                <ul>
                    <li class="navItem"><a href="">Home</a></li>
                    <li class="navItem"><a href="">Store</a></li>
                    <li class="navItem"><a href="">More</a></li>
                </ul>
            </main>
        </nav>
    </header>
    <header>
        <main>
            <div class="boxContent">
                <legend class="boxTitle">Portais de Acesso</legend>
                <section class="flex">
                    <div class="link"><a href="../index.php"><img src="./img/LinkHome.jpg" alt="">
                            <p class="linkTitle">Home</p>
                        </a></div>
                    <div class="link"><a href=""><img src="./img/LinkPedidos.jpg" alt="">
                            <p class="linkTitle">Requests</p>
                        </a></div>
                    <div class="link"><a href="./DataBase/"><img src="./img/LinkBanco.png" alt="">
                            <p class="linkTitle">Data Base</p>
                        </a></div>
                    <div class="link"><a href=""><img src="./img/LinkAdmin.jpg" alt="">
                            <p class="linkTitle">Admin Center</p>
                        </a></div>
                    <div class="link"><a href=""><img src="./img/LinkConfig.webp" alt="">
                            <p class="linkTitle">Config</p>
                        </a></div>
                    <div class="link"><a href=""><img src="./img/LinkUser.png" alt="">
                            <p class="linkTitle">User Admin</p>
                        </a></div>
                    <div class="link"><a href="./ProductStorage/storage.php"><img src="./img/LinkStorage.png" alt="">
                            <p class="linkTitle">Storage</p>
                        </a></div>
                </section>
            </div>
        </main>
    </header>
</body>
<script src="https://kit.fontawesome.com/a0544da68a.js" crossorigin="anonymous"></script>
</html>

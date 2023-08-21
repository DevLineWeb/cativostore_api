<?php

session_start();
include_once('./data/config.php');
include_once('./data/smartCart.php');
include_once('./data/filter.php');
?>

<?php
ini_set('display_errors', 0);
error_reporting(0);
?>
<html>

<head>
    <title> CSD | HOME</title>
    <link rel="stylesheet" type="text/css" href="./main.css">
    <link rel="stylesheet" href="./css/all.css">

</head>

<body>
    <header>
        <div class="banner">
            <img src="./img/banner-5.jpg" alt="">
        </div>
    </header>
    <header>
        <div class="upper">
            <main>
                <div class="csd_logo">
                    <img src="./img/logo.png">
                </div>
                <div class="midiaLinks">
                    <ul>
                        <li class="midiaItem"><i class="	fab fa-facebook-f"></i></li>
                        <li class="midiaItem"><i class="	fab fa-instagram"></i></li>
                        <li class="midiaItem"><i class="	fab fa-twitter"></i></li>
                        <li class="midiaItem"><i class="	fab fa-youtube"></i></li>
                    </ul>
                </div>
            </main>
            <div class="configMenu">
                <a href="#"><i class="fa fa-navicon configNav"></i></a>
                <div class="configSubmenu">
                    <h5>MENU</h5>
                    <ul>
                        <a href="./UserPage/">
                            <li>Conta <span class="fa-solid fa-user"></span></li>
                        </a>
                        <a href="#" class="cartWindown">
                            <li>carrinho <span class="fa-solid fa-cart-shopping"></span></li>
                        </a>
                        <a href="">
                            <li>configurações <span class="fa-solid fa-gear"></span></li>
                        </a>
                        <a href="">
                            <li>ajuda <span class="fa-regular fa-circle-question"></span></li>
                        </a>
                        <a href="">
                            <li>suporte <span class="fa-solid fa-headset"></span></li>
                        </a>
                        <a href="">
                            <li>sobre <span class="fa-solid fa-user-astronaut"></span></li>
                        </a>
                        <a href="">
                            <li>termos de privacidade <span class="fa-solid fa-scroll"></span></li>
                        </a>
                        <?php
                        if ($_SESSION['mail']) { ?>
                        <a href="./AdminCenter">
                            <li>Admin Center <span class="fa-solid fa-lock"></span></li>
                        </a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <header>
        <div class="navbar">
            <main>
                <div class="menu">
                    <ul>
                        <li><a href="" class="menuItem">Store</a></li>
                        <li><a href="" class="menuItem">Destaques</a></li>
                        <li><a href="" class="menuItem">Categorias</a></li>
                        <li><a href="" class="menuItem">Ofertas</a></li>
                        <li class="menuSearch"><input type="text" placeholder=""></li>
                    </ul>
                </div>
                <div class="menuAcount">
                    <ul>
                        <?php
                        if (!$_SESSION['mail']) { ?>

                            <li class="acountItem">
                                <a href="#" class="acountItem userNav">Entre ou Cadastre-se</a>
                            </li>
                            <li class="acountItem">
                                <a href="#"><i class="fa-solid fa-user userNav"></i></a>
                            </li>
                        <?php
                        }
                        ?>
                        <?php
                        if ($_SESSION['mail']) { ?>

                            <li class="acountItem">
                                <a href="#"><i class="fa-solid fa-cart-shopping cartWindown"></i></a>
                                <?php
                                $count = 0;
                                if (!empty($_SESSION["shopping_cart"])) {
                                    $count = count($_SESSION["shopping_cart"]); ?>
                                    <div class="cartKeys"><?php echo $count; ?></div>
                                <?php } ?>
                            </li>
                            <li class="acountItem">
                                <a href="#"><i class="fa-solid fa-bell notifyWindown"></i></a>
                            </li>
                            <li class="acountItem">
                                <a href="#"><i class="fa-solid fa-star"></i></i></a>
                            </li>
                            <li class="acountItem">
                                <a href="#"><i class="fa-solid fa-user userNav"></i></a>
                            </li>

                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </main>
        </div>
    </header>
    <header>
        <div class="slider-1">

            <?php
            $sql_slider = 'SELECT * FROM csd_prod_all';
            if ($result = mysqli_query($conect, $sql_slider)) {
                $prod_desc = array();
                $prod_sell = array();
                $prod_img = array();
                $i = 0;

                while ($reg = mysqli_fetch_assoc($result)) {
                    $prod_desc[$i] = $reg['prod_all_desc'];
                    $prod_sell[$i] = $reg['prod_all_sell'];
                    $prod_img[$i] = $reg['prod_all_img'];
            ?>

                    <a href="#"><img src="./ProductImage/<?php echo $prod_img[$i]; ?>" alt="">
                        <p><?php echo $prod_desc[$i]; ?></p>
                        <div class="prodSldOff"> - 20%OFF</div>

                        <ul class="prodSldPrice">
                            <li>
                                <del> De R$<?php echo $prod_brutus = $prod_sell[$i] * 1.20 ?></del>
                            </li>
                            <li class="prodSell">
                                R$<?php echo $prod_sell[$i]; ?>
                            </li>
                        </ul>
                    </a>



            <?php
                    $i++;
                }
            }
            ?>
        </div>
    </header>
    <header>
        <main>
            <div class="catalogo">
                <div class="sidebar">
                    <a href="#" class="filter-show"><i class="fa-solid fa-angles-down"></i></a>
                    <legend class="sidebar-title">STORE</legend>
                    <nav class="navbar-2">
                        <ul>
                            <li>
                                <div class="prodClass01">
                                    <span class="fa-solid fa-mobile-screen-button"></span>Smartphones
                                    <span class="fas fa-caret-down arrow01"></span>
                                </div>
                                <ul class="class01show">
                                    <li><a href="index.php?action=filterIphone13">iPhone 13</a></li>
                                    <li><a href="index.php?action=filterIphone12">iPhone 12</a></li>
                                    <li><a href="index.php?action=filterIphone11">iPhone 11</a></li>
                                    <li><a href="index.php?action=filterIphoneX">iPhone X</a></li>
                                    <li><a href="index.php?action=filterIphone8">iPhone 8</a></li>
                                    <li><a href="index.php?action=filterIphone7">iPhone 7</a></li>
                                    <li><a href="index.php?action=filterIphoneSE">iPhone SE</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="prodClass02" method="POST"><span class="fa-solid fa-bolt-lightning"></span>Acessórios
                                    <span class="fas fa-caret-down arrow02"></span>
                                </div>
                                <ul class="class02show">
                                    <li><a href="index.php?action=filterAccessory-1">Relógio</a></li>
                                    <li><a href="index.php?action=filterAccessory-2">Prata</a></li>
                                    <li><a href="index.php?action=filterAccessory-3">Pulseira</a></li>
                                    <li><a href="index.php?action=filterAccessory-4">Aneis</a></li>
                                    <li><a href="index.php?action=filterAccessory-5">Boné</a></li>
                                    <li><a href="index.php?action=filterAccessory-6">ShowderBag</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="prodClass03"><span class="fa-solid fa-shirt"></span>Vestuário <span class="fas fa-caret-down arrow03"></span></div>
                                <ul class="class03show">
                                    <li><a href="index.php?action=filterClothe-1">Camiseta</a></li>
                                    <li><a href="index.php?action=filterClothe-2">Moletom</a></li>
                                    <li><a href="index.php?action=filterClothe-3">Calça</a></li>
                                    <li><a href="index.php?action=filterClothe-4">Corta-vento</a></li>
                                    <li><a href="index.php?action=filterClothe-5">Calção</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="gridGround">
                    <ul>
                        <?php
                        if ($result = mysqli_query($conect, $sqlPort)) {
                            $prod_desc = array();
                            $prod_sell = array();
                            $prod_img = array();
                            $prod_id = array();
                            $i = 0;

                            while ($reg = mysqli_fetch_assoc($result)) {
                                $prod_desc[$i] = $reg['prod_all_desc'];
                                $prod_sell[$i] = $reg['prod_all_sell'];
                                $prod_img[$i] = $reg['prod_all_img'];
                                $prod_id[$i] = $reg['prod_all_id'];
                        ?>

                                <li class="gridItem">
                                    <form class="portItem" method="post" action="index.php?action=add&id=<?php echo $prod_id[$i]; ?>">
                                        <a href="#">
                                            <img src="./ProductImage/<?php echo $prod_img[$i]; ?>" alt="">
                                            <p><?php echo $prod_desc[$i]; ?></p>
                                            <p class="prodSell"> R$<?php echo $prod_sell[$i]; ?></p>
                                        </a>
                                        <input type="hidden" name="hidden_name" value="<?php echo $prod_desc[$i]; ?>" />
                                        <input type="hidden" name="hidden_price" value="<?php echo $prod_sell[$i]; ?>" />
                                        <input type="hidden" name="hidden_img" value="<?php echo $prod_img[$i]; ?>" />
                                        <input type="hidden" name="hidden_quantity" value="1" />
                                        <button type="submit" name="addCart" class="cartBtn"><b><i class="fa-solid fa-cart-shopping"></i> COMPRAR</b> </button>
                                    </form>
                                </li>

                        <?php
                                $i++;
                            }
                        }

                        ?>
                    </ul>
                    <div class="navPage"> 
                        <ul>
                            <?php
                            if ($prod_all_rows > $pageUn) { ?>
                                <li class="navPageItem"><a href="?page=<?php echo $nowPage - 1; ?>"><i class="fa-solid fa-arrow-left"></i></a></li>

                                <?php
                                for ($i = $nowPage - $maxlinks; $i <= $nowPage - 1; $i++) {
                                    if ($i >= 1) { ?>
                                        <li class="navPageItem"><a href="?page=<?php echo $i; ?>"> <?php echo $i; ?> </a></li>
                                <?php
                                    }
                                }
                                ?>

                                <li class="navPageItem active"> <?php echo $nowPage; ?> </li>

                                <?php
                                for ($i = $nowPage + 1; $i <= $nowPage + $maxlinks; $i++) {
                                    if ($i <= $totalPages) { ?>
                                        <li class="navPageItem"><a href="?page=<?php echo $i; ?>"> <?php echo $i; ?> </a></li>
                                <?php
                                    }
                                }
                                ?>
                                <li class="navPageItem"><a href="?page=<?php echo $nowPage + 1; ?>"><i class="fa-solid fa-arrow-right"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
    </header>
    <header>
        <div class="about">
            <main>
                <ul>Sobre Nós
                    <li><a href="">Projeto CSD</a></li>
                    <li><a href="">Equipe Cativo</a></li>
                    <li><a href="">Termos</a></li>
                    <li><a href="">Privacidade</a></li>
                </ul>
                <ul>Serviços
                    <li><a href="">Downloads</a></li>
                    <li><a href="">Listagem</a></li>
                    <li><a href="">Aprender</a></li>
                    <li><a href="">Manuais</a></li>
                </ul>
                <ul>Suporte
                    <li><a href="">Enviar solicitação</a></li>
                    <li><a href="">Entre em contato</a></li>
                    <li><a href="">Chat online</a></li>
                    <li><a href="">Logística</a></li>
                </ul>
                <ul>Comunidade
                    <li><a href="">Plataformas</a></li>
                    <li><a href="">Github</a></li>
                    <li><a href="">Reddit</a></li>
                    <li><a href="">Fórum</a></li>
                </ul>
                <ul>
                    <div class="logo-2">
                        CSD
                        <p> Cativo Store </p>
                    </div>
                    <div class="socialink">
                        <ul>
                            <li><i class="	fab fa-facebook-f"></i></li>
                            <li><i class="	fab fa-instagram"></i></li>
                            <li><i class="	fab fa-twitter"></i></li>
                            <li><i class="	fab fa-youtube"></i></li>
                            <li><i class="	fab fa-github"></i></li>
                        </ul>
                    </div>
                </ul>
            </main>
        </div>
    </header>
    <header>
        <div class="downer">
            <main>

            </main>
        </div>
    </header>
    <header class="modalDiv">
        <div class="notify-submenu">
            <legend>Caixa de Menssagens</legend>
            <div class="notify-msg">
                <ul>
                    <li><span class="fa-solid fa-envelope"> </span></li>
                    <li>
                        <h5>1 From CSD Store</h5>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cart-background">
            <div class="cart-submenu">
                <legend><i class="fa-solid fa-cart-shopping"></i> Carrinho de compras</legend>
                <div class="cartItens">
                    <table>
                        <tr>
                            <th>Item</th>
                            <th>Descrição</th>
                            <th>Valor Unitário</th>
                            <th>Quantidade</th>
                            <th>Sub Total</th>
                            <th>Ação</th>
                        </tr>
                        <?php
                        if (!empty($_SESSION["shopping_cart"])) {
                            $total = 0;

                            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                        ?>
                                <tr>
                                    <td><img src="./ProductImage/<?php echo $values["item_img"]; ?>" alt=""></td>
                                    <td><?php echo $values["item_name"]; ?></td>
                                    <td>R$ <?php echo number_format($values["item_price"], 2); ?><input type="hidden" class="itemSell" value="<?php echo $values["item_price"]; ?>"></td>
                                    <td>
                                        <input type="number" id="itemUn" class="itemUn" onchange="CalSubtotal()" max="100" min="1" value="<?php echo $values['item_quantity']; ?>">
                                    </td>
                                    <td class="totalUn"></td>
                                    <td>
                                        <a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>">Remove</a>
                                    </td>
                                </tr>
                            <?php
                                $total = $total + ($values['item_quantity'] * $values["item_price"]);
                            }

                            ?>
                        <?php
                        }
                        ?>
                    </table>
                    <div class="cartTotal">
                        <ul>
                            
                        <li>
                                <a href="index.php"><button class="reqClose">Voltar</button></a>
                            </li>
                            <li>
                                <a href="" ><button class="reqStart">Concluir</button></a>
                            </li>
                            <div class="totalCart">
                                <ul>
                            <li>
                                <p>Total:</p>
                            </li>
                            <li id="totalCart">
                            </li>
                            </ul>
                            </div>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php

        if (!$_SESSION['mail']) {
        ?>
            <div class="user-background">
                <div class="user_submenu">
                    <form method="POST" action="./data/login.php">
                        <legend>LOGIN</legend>
                        <input type="mail" name="mail" id="mail" placeholder="E-mail" required>
                        <input type="password" name="password" id="password" placeholder="Senha" required>
                        <input class="submitBtn" type="submit" id="submit" name="submit" value="ENTRAR"></input>
                        <a href="#">Cadastre-se</a>
                    </form>
                </div>
            <?php
        }
            ?>
            </div>
            <?php

            if ($_SESSION['mail']) {
            ?>
                <div class="user-background">
                    <div class="user_submenu">
                        <form action="">
                            <legend> BEM VINDO! </legend>
                            <p>Seja bem vindo!</p>
                            <p> <?php echo ($_SESSION['mail']); ?></p>
                            <br>
                            <a class="acountBtn" href="./mainpage/index.php">CONTA</a>
                            <a class="acountBtn" href="#">Termos de privacidade</a>
                            <a class="acountBtn" href="./data/logout.php">SAIR</a>
                        </form>
                    </div>
                <?php
            }
                ?>
    </header>
    <header>
        <div class="alert alert-success" id="alertGood">
            Item Adicionado ao Carrinho!
        </div>

        <?php
        if (!empty($_SESSION["shopping_cart"])) {
            $count = count($_SESSION["shopping_cart"]); ?>
            <script>
                function alertCart() {
                    $(".alert-success").toggleClass("show")
                }
                alertCart()
            </script>
        <?php } ?>
    </header>
</body>
<script type="text/javascript" src="./js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="./js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./js/slick.min.js"></script>
<script type="text/javascript" src="./main.js"></script>

</html>
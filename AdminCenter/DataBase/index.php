<?php
include_once('./assets/config.php');
include_once('./assets/pagination.php');
?>

<!DOCTYPE html> 
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/a0544da68a.js" crossorigin="anonymous"></script>
    <title>CSD | DataBase</title>
</head>

<body>
    <header>
        <nav class="navBar">
            <main>
                <div class="logo"><a href=""> Cativo Portal </a></div>
                <ul>
                    <li class="navItem"><a href="../index.php">Home</a></li>
                    <li class="navItem"><a href="">Store</a></li>
                    <li class="navItem"><a href="">More</a></li>
                </ul>
            </main>
        </nav>
    </header>
    <header>
        <div class="container">
            <div class="sidebar">
                <ul>
                    <legend>Store Control</legend>
                    <input class="sideSearch" name="search" id="search" placeholder="Search" type="text">
                    <a href="" class="sideItem"><i class="fa-solid fa-database"></i> Produtos</a>
                    <a href="" class="sideItem"><i class="fa-solid fa-user"></i> Usuários </a>
                    <a href="../ProductStorage/storage.php" class="sideItem"><i class="fa-solid fa-circle-plus"></i> Adicionar</a>
                </ul>
            </div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Class</th>
                    <th>Description</th>
                    <th>Price Buy</th>
                    <th>Price Sell</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
                <?php
                if ($result = mysqli_query($conect, $sqlDb)) {
                    $prod_id = array();
                    $prod_class = array();
                    $prod_subclass = array();
                    $prod_desc = array();
                    $prod_buy = array();
                    $prod_sell = array();
                    $prod_quantity = array();
                    $i = 0;

                    while ($reg = mysqli_fetch_assoc($result)) {
                        $prod_id[$i] = $reg['prod_all_id'];
                        $prod_class[$i] = $reg['prod_all_class'];
                        $prod_desc[$i] = $reg['prod_all_desc'];
                        $prod_sell[$i] = $reg['prod_all_sell'];
                        $prod_buy[$i] = $reg['prod_all_buy'];
                        $prod_quantity[$i] = $reg['prod_all_quantity'];
                ?>

                        <tr>
                            <td>
                                <?php echo $prod_id[$i]; ?>
                            </td>
                            <td>
                                <?php echo $prod_class[$i]; ?>
                            </td>
                            <td>
                                <?php echo $prod_desc[$i]; ?>
                            </td>
                            <td>
                                <?php echo $prod_buy[$i]; ?>
                            </td>
                            <td>
                                <?php echo $prod_sell[$i]; ?>
                            </td>
                            <td>
                                <?php echo $prod_quantity[$i]; ?>
                            </td>
                            <td>
                                <a href="./itemEdit.php?id=<?php echo $prod_id[$i] ?>" class="action"><i class="fa-solid fa-marker"></a></i>
                                <a href="#" class="action"><i class="fa-solid fa-x dellBtn"></i></a>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
            <div class="navPage">
                <ul>
                    <?php
                    if ($prod_all_rows > $pageUn) {
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
                    } ?>
                </ul>
            </div>
        </div>
    </header>
    <header>
        <div class="modalBack">
            <div class="modalDell">
                <legend>Tem certeza que deseja excluir o item selecionado?</legend>
                <a href="" class="deleteBtn actYes">SIM</a>
                <a href="" class="deleteBtn actNo">NÃO</a>
            </div>
        </div>
    </header>
</body>
<script type="text/javascript" src="../data/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../data/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./main.js"></script>
</html>
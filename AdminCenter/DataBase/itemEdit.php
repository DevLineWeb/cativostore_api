<?php 
    include_once('./assets/config.php');


    if(!empty($_GET['id'])){
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM csd_prod_all WHERE prod_all_id = $id";
        $result = $conect->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){

                $prod_id = $user_data['prod_all_id'];
                $prod_class = $user_data['prod_all_class'];
                $prod_desc = $user_data['prod_all_desc'];
                $prod_buy = $user_data['prod_all_buy'];
                $prod_sell = $user_data['prod_all_sell'];
                $prod_img = $user_data['prod_all_img'];
                $prod_quantity = $user_data['prod_all_quantity'];

            }
        }
        else {
            header('location:index.php');
        }
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../data/navbar.css">
    <link rel="stylesheet" href="./assets/itemEdit.css">
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
                    <li class="navItem"><a href="">About</a></li>
                    <li class="navItem"><a href="">More</a></li>
                </ul>
            </main>
        </nav>
    </header>
    <header>
        <div class="container">
                <legend>Edit Page</legend>
            <div class="boxForm">
                <form action="actionEdit.php" method="POST">
                    <input type="hidden" name="prod_id" id="prod_id" value="<?php echo $prod_id?>">
                    <h4><?php echo $prod_desc ?></h4>
                    <input type="text" name="prod_class" id="prod_class" placeholder="Classe" required value="<?php echo $prod_class ?>">

                    <input type="text" name="prod_desc" id="prod_desc" placeholder="Descrição" required value="<?php echo $prod_desc ?>">

                    <input type="text" name="prod_buy" id="prod_buy" placeholder="Valor unitário" required value="<?php echo $prod_buy ?>">

                    <input type="text" name="prod_sell" id="prod_sell" placeholder="Preço de anúncio" required value="<?php echo $prod_sell ?>">

                    <input type="number" name="prod_quantity" id="prod_quantity" placeholder=" <?php echo $prod_quantity ?>" value=" <?php echo $prod_quantity ?>">

                    <input type="text" name="prod_img" id="prod_img" placeholder="URL Imagem"value="<?php echo $prod_img ?>">

                    <button type="submit" name="update" id="update">Update</button>
                </form>
            </div>
        </div>
    </header>
</body>
<script type="text/javascript" src="../data/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../data/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./main.js"></script>
</html>
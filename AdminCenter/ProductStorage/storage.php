<?php

if (isset($_POST['submit_1'])) {
    include_once('config.php');

    $prod01_class = $_POST['prod01_class'];
    $prod01_desc = $_POST['prod01_desc'];
    $prod01_buy = $_POST['prod01_buy'];
    $prod01_sell = $_POST['prod01_sell'];
    $prod01_img = $_POST['prod01_img'];

    $result2 = mysqli_query($conect, "INSERT INTO csd_prod_all(prod_all_class, prod_all_desc, prod_all_buy, prod_all_sell, prod_all_img) 
        VALUES('$prod01_class','$prod01_desc','$prod01_buy', '$prod01_sell', '$prod01_img')");
}
// if (isset($_FILES['prod01_img'])) {
//     include_once('config.php');
//     $file = $_FILES['prod01_img'];
//     $directory = "prod_img/";

//     move_uploaded_file($file["tmp_name"], $directory);
// }
if (isset($_POST['submit_2'])) {
    include_once('config.php');

    $prod02_class = $_POST['prod02_class'];
    $prod02_desc = $_POST['prod02_desc'];
    $prod02_buy = $_POST['prod02_buy'];
    $prod02_sell = $_POST['prod02_sell'];
    $prod02_img = $_POST['prod02_img'];

    $result2 = mysqli_query($conect, "INSERT INTO csd_prod_all(prod_all_class, prod_all_desc, prod_all_buy, prod_all_sell, prod_all_img) 
        VALUES('$prod02_class','$prod02_desc','$prod02_buy', '$prod02_sell', '$prod02_img')");
}

if (isset($_POST['submit_3'])) {
    include_once('config.php');

    $prod03_class = $_POST['prod03_class'];
    $prod03_desc = $_POST['prod03_desc'];
    $prod03_buy = $_POST['prod03_buy'];
    $prod03_sell = $_POST['prod03_sell'];
    $prod03_img = $_POST['prod03_img'];

    $result2 = mysqli_query($conect, "INSERT INTO csd_prod_all(prod_all_class, prod_all_desc, prod_all_buy, prod_all_sell, prod_all_img) 
        VALUES('$prod03_class','$prod03_desc','$prod03_buy', '$prod03_sell', '$prod03_img')");
}


?>

<head>
    <title>CSD | Storage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
    <div class="content">
        <div class="container">
            <div class="buttonsForm">
                <div class="btnColor"></div>
                <button id="class1">Smartphone</button>
                <button id="class2">Acessórios</button>
                <button id="class3">Vestuário</button>
            </div>

            <form id="form1" method="POST">
                <br>
                <label for="prod01_class">Selecione o modelo:</label>

                <select name="prod01_class" id="prod01_class">
                    <option value="appleSE">Apple iPhone SE</option>
                    <option value="apple7">Apple iPhone 7</option>
                    <option value="apple8">Apple iPhone 8</option>
                    <option value="appleX">Apple iPhone X</option>
                    <option value="apple11">Apple iPhone 11</option>
                    <option value="apple12">Apple iPhone 12</option>
                    <option value="apple13">Apple iPhone 13</option>
                    <option value="ipadmini">iPad Mini</option>
                </select>

                <input type="text" name="prod01_desc" id="prod01_desc" placeholder="Descrição" required>
                <div class="ico1"><i class="far fa-clipboard"></i></div>

                <input type="text" name="prod01_buy" id="prod01_buy" placeholder="Valor unitário" required>
                <div class="ico2"><i class="	fas fa-donate"></i></div>

                <input type="text" name="prod01_sell" id="prod01_sell" placeholder="Preço de anúncio" required>
                <div class="ico3"><i class="	fas fa-donate"></i></div>

                <input class="uploadBtn" type="file" name="prod01_img" id="prod01_img">

                <button type="submit" name="submit_1" id="submit_1">Cadastrar</button>


            </form>


            <form id="form2" method="POST">
                <br>
                <label for="prod02_class">Selecione a categoria:</label>

                <select name="prod02_class" id="prod02_class">
                    <option value="Accessory-1">Relógio</option>
                    <option value="Accessory-2">Prata</option>
                    <option value="Accessory-3">Pulseira</option>
                    <option value="Accessory-4">anel</option>
                    <option value="Accessory-5">Brinco</option>
                    <option value="Accessory-6">Capinha</option>
                    <option value="Accessory-7">ShowderBag</option>
                </select>

                <input type="text" name="prod02_desc" id="prod02_desc" placeholder="Descrição" required>
                <div class="ico1"><i class="far fa-clipboard"></i></div>

                <input type="text" name="prod02_buy" id="prod02_buy" placeholder="Valor unitário" required>
                <div class="ico2"><i class="	fas fa-donate"></i></div>

                <input type="text" name="prod02_sell" id="prod02_sell" placeholder="Preço de anúncio" required>
                <div class="ico3"><i class="	fas fa-donate"></i></div>

                <input class="uploadBtn" type="file" name="prod02_img" id="prod02_img">

                <button type="submit" name="submit_2" id="submit_2">Cadastrar</button>



            </form>
            <form id="form3" method="POST">
                <br>
                <label for="prod03_class">Selecione a peça:</label>

                <select name="prod03_class" id="prod03_class">
                    <option value="Clothe-01">Camiseta</option>
                    <option value="Clothe-02">Calça</option>
                    <option value="Clothe-03">Moletom</option>
                    <option value="Clothe-04">Corta-vento</option>
                    <option value="Clothe-05">Boné</option>
                </select>

                <input type="text" name="prod03_desc" id="prod03_desc" placeholder="Descrição" required>
                <div class="ico1"><i class="far fa-clipboard"></i></div>

                <input type="text" name="prod03_buy" id="prod03_buy" placeholder="Valor unitário" required>
                <div class="ico2"><i class="	fas fa-donate"></i></div>

                <input type="text" name="prod03_sell" id="prod03_sell" placeholder="Preço de anúncio" required>
                <div class="ico3"><i class="	fas fa-donate"></i></div>

                <input class="uploadBtn" type="file" name="prod03_img" id="prod03_img">

                <button type="submit" name="submit_3" id="submit_3">Cadastrar</button>
            </form>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>
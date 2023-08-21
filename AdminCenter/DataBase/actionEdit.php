<?php
    include_once('./assets/config.php');
    if(isset($_POST['update'])) {
        $prod_id = $_POST['prod_id'];
        $prod_class = $_POST['prod_class'];
        $prod_desc = $_POST['prod_desc'];
        $prod_sell = $_POST['prod_sell'];
        $prod_buy = $_POST['prod_buy'];
        $prod_img = $_POST['prod_img'];
        $prod_quantity = $_POST['prod_quantity'];

        $sqlUpdate = "UPDATE csd_prod_all SET prod_all_class = '$prod_class', prod_all_desc = '$prod_desc', prod_all_sell = '$prod_sell',
         prod_all_buy = '$prod_buy',  prod_all_img = '$prod_img',  prod_all_quantity = '$prod_quantity' WHERE prod_all_id = $prod_id";
        
        $result = $conect->query($sqlUpdate);
}
header('location:index.php');
?>
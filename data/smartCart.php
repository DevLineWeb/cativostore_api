<?php
include_once('./data/config.php');

if (isset($_POST["addCart"])) {     //SE CLICAR EM ADICIONAR AO CARRINHO
    if(!$_SESSION["mail"]) {
        echo '<script>alert("É necessário realizar o login!")</script>';
        echo '<script>window.location="AcessPage/index.php"</script>';
    }
    else {
        echo '<script>window.location="index.php"</script>';
    }
    if (isset($_SESSION["shopping_cart"])) {    //SE A SESSÃO DO CARRINHO JÁ FOI INICIADA
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {   //SE O ITEM NÃO ESTÁ NO CARRINHO
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(    //CRIA A ARRAY
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_price'          =>     $_POST["hidden_price"],
                'item_quantity'         =>      $_POST["hidden_quantity"] = 1,
                'item_img'            =>      $_POST["hidden_img"]
            );

            $_SESSION["shopping_cart"][$count] = $item_array;
            echo '<script>alert("Item Adicionado!")</script>';
        } else { //SE O ITEM JÁ ESTÁ NO CARRINHO
            echo '<script>alert("Este item já está no seu carrinho!")</script>';
            echo '<script>window.location="index.php"</script>';
        }
    } else { //SE A SESSÃO AINDA NÃO FOI INICIADA
        $item_array = array( //CRIA A ARRAY
            'item_id'               =>     $_GET["id"],
            'item_name'               =>     $_POST["hidden_name"],
            'item_price'          =>     $_POST["hidden_price"],
            'item_quantity'         =>      $_POST["hidden_quantity"] = 1,
            'item_img'            =>      $_POST["hidden_img"]
        );

        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if (isset($_GET["action"])) { //SE CLICAR EM DELETAR ITEM
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]); //DELETA O ITEM
            }
        }
    }
}

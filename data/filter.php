<?php
include_once('./data/config.php');
// PAGINAÇÃO
$nowPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$pageUn = 28;
$beginPage = (($pageUn * $nowPage) - $pageUn);

$sqlPort = "SELECT * FROM csd_prod_all LIMIT $beginPage , $pageUn";
// links para PAGINAÇÃO

$maxlinks = 2;
$prod_all_query = "SELECT * FROM csd_prod_all";
$resultRow = mysqli_query($conect, $prod_all_query);
$prod_all_rows = mysqli_num_rows($resultRow);
$totalPages = ceil($prod_all_rows / $pageUn);

//FILTRO
if (isset($_GET["action"])) {
    if ($_GET["action"] == "filterIphone7") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "apple7"';
    }
    if ($_GET["action"] == "filterIphone8") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "apple8"';
    }
    if ($_GET["action"] == "filterIphoneX") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "appleX"';
    }
    if ($_GET["action"] == "filterIphone11") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "apple11"';
    }
    if ($_GET["action"] == "filterIphone12") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "apple12"';
    }
    if ($_GET["action"] == "filterIphone13") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "apple13"';
    }
    if ($_GET["action"] == "filterIphoneSE") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "appleSE"';
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "filterAccessory-1") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "Accessory-1"';
    }
    if ($_GET["action"] == "filterAccessory-2") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "Accessory-2"';
    }
    if ($_GET["action"] == "filterAccessory-3") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "Accessory-3"';
    }
    if ($_GET["action"] == "filterAccessory-4") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "Accessory-4"';
    }
    if ($_GET["action"] == "filterAccessory-5") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "Accessory-5"';
    }
    if ($_GET["action"] == "filterAccessory-6") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "Accessory-6"';
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "filterClothe-1") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "Clothe-01"';
    }
    if ($_GET["action"] == "filterClothe-2") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "Clothe-02"';
    }
    if ($_GET["action"] == "filterClothe-3") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "Clothe-03"';
    }
    if ($_GET["action"] == "filterClothe-4") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "Clothe-04"';
    }
    if ($_GET["action"] == "filterClothe-5") {

        $sqlPort = 'SELECT * FROM csd_prod_all where prod_all_class = "Clothe-05"';
    }
}

<?php
// PAGINAÇÃO
$nowPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$pageUn = 22;
$beginPage = (($pageUn * $nowPage) - $pageUn);

$sqlDb = "SELECT * FROM csd_prod_all LIMIT $beginPage , $pageUn";
// links para PAGINAÇÃO

$maxlinks = 2;
$prod_all_query = "SELECT * FROM csd_prod_all";
$resultRow = mysqli_query($conect, $prod_all_query);
$prod_all_rows = mysqli_num_rows($resultRow);
$totalPages = ceil($prod_all_rows / $pageUn);

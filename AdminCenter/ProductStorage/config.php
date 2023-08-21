<?php
$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'db_csd01';

$conect = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conect->connect_errno) {
    echo "Erro";
}

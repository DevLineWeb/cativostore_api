
<?php

session_start(); //INICIA A SESSÃO
include_once('./config.php'); //INCLUI O ARQUIVO DE INTEGRAÇÃO COM O BANCO

if (empty($_POST['mail']) || empty($_POST['password'])) { //SE NÃO FOR INFORMADO USUÁRIO E SENHA
    header(('Location: index.php')); //VOLTA PRA PÁGINA INICIAL
    exit();
}

$user = mysqli_real_escape_string($conect, $_POST['mail']); //ATRIBUI O USUÁRIO PARA UMA VARIÁVEL STRING
$pass = mysqli_real_escape_string($conect, $_POST['password']); //ATRIBUI A SENHA PARA UMA VARIÁVEL STRING

$verify = "SELECT * FROM csd_users WHERE csd_mail = '{$user}' AND csd_password = md5('{$pass}')"; //VERIFICA SE O USUÁRIO E SENHA SÃO AUTENTICADOS NO BANCO

$result = mysqli_query($conect, $verify); //ATRIBUI O RESULTADO A UMA VARIÁVEL

$row = mysqli_num_rows($result); //ATRIBUI O RESULTADO A UMA LINHA DO BANCO

if ($row == 1) { //SE UMA LINHA FOI ENCONTRADA
    $_SESSION['mail'] = $user; //CRIA A SESSÃO EMAIL E ATRIBUI A ELA UMA VARIÁVEL USER
    header('Location: ../index.php'); //RETORNA A PÁGINA INICIAL COM A SESSÃO CRIADA
    exit();
} else {
    $_SESSION['not_autenticate'] = true; //SE NÃO FOR AUTENTICADO ATRIBUI UM VALOR BOOLEANO TRUE
    echo "<script language='javascript' type='text/javascript'>
            alert('login e/ou senha incorreto');windows.location.href='index.php';
            </script>";
    die();
}

?>
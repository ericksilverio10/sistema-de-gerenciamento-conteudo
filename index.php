<?php
    session_start();
    include_once('config/url.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="<?=$BASE_URL?>assets/css/fonts.css">
    <link rel="stylesheet" href="<?=$BASE_URL?>assets/css/style.css">
    <title>Entrar</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['login'])){
            if(isset($_POST['enviado'])){
                $loginLeo = "leonardomazurek123";
                $senhaLeo = "123456";
                $loginErick = "ericksilverio10";
                $senhaErick = "123456";
                $loginFellype = "fellype123";
                $senhaFellype = "123456";
                $login_input = $_POST['login'];
                $senha_input = $_POST['senha'];
                if($loginLeo == $login_input && $senhaLeo == $senha_input){
                    $_SESSION['login'] = $login;
                    header('Location: home.php');
                } else if($loginErick == $login_input && $senhaErick == $senha_input){
                    $_SESSION['login'] = $login;
                    header('Location: erick.php'); }
                else if($loginFellype == $login_input && $senhaFellype == $senha_input){
                        $_SESSION['login'] = $login;
                        header('Location: fellype.php'); }
                else{
                    echo "<h1>E-mail ou Senha inválido(s)</h1>";
                }
            }
            include('login.php');
        } else{
            include('home.php');
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
        }
    ?>
</body>
</html>
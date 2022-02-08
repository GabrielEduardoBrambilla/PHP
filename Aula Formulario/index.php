<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="StyleFormulario.css">
</head>
<body class="bc-body">
    <?php
    
     if(!isset($_SESSION['login']) ){

        if(!isset($_POST['acao'])){
            $login = 'gabriel';
            $senha = '123456';
            

            $loginForm = $_POST['login'];
            $senhaForm = $_POST['senha'];
            if($login == $loginForm && $senha == $senhaForm){
                $_SESSION['login'] = $login;
                header('Location: index.php');
                echo " Dados validos";
            }else{
                echo ' Dados invalidos. Tente novamente \n gabriel 123456';
            }
         }

         include('login.php');
        }else{
         include('home.php');
        }
        


    ?>
</body>
</html>
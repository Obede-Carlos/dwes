<?php
    if (isset($_POST['envio'])) {
        if (!empty($_POST["usuario"]) && !empty($_POST["passwd"]) && isset($_COOKIE["usuario"]) && isset($_POST["passwd"])) {
            $login = array($_POST["usuario"], $_POST["passwd"]);
            $logincodif = json_encode($login);
            setcookie("login",$logincodif,time()+3600);
            header("Location: home.php");
        }
    } else {
        //borrar las cookies y redirigir al html
        setcookie("login","",time()-7200);
        header("Location: login.html");
    }
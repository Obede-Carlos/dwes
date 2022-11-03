<?php
    if (isset($_POST['envio'])) {
        if (!empty($_POST['idioma']) && isset($_COOKIE['idioma'])) {
            setcookie("idioma",$_POST['idioma'],time()+3600);
        }
        if (!empty($_POST['marca']) && isset($_COOKIE['marca'])) {
            setcookie("marca",$_POST['marca'],time()+3600);
        }
        if (!empty($_POST['idioma']) && !empty($_POST['marca'])) {
            //redirigiremos la pagina a otra para mostrar la cookie, y lo haremos con header
            header('Location: miniEjerciciopt3.php'); 
        }
    } else {
        //borrar las cookies y redirigir al html
        setcookie("idioma","",time()-7200);
        setcookie("marca","",time()-7200);
        header("Location: miniejercicio1.html");
    }
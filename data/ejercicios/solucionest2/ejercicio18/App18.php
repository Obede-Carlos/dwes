<?php
class App{

    public function run(){
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = "App18.php";
        }
        $this->$method();      
    }


    public function login(){
        include('views/login.html');
    }

    public function auth(){
        if (isset($_POST["envio"])) {
            if (!empty($_POST["usuario"]) && !empty($_GET["passwd"]) && isset($_POST["usuario"]) && isset($_POST["passwd"])) {
                setcookie("nombreusu",$_POST["usuario"], time()+3600);
                header("Location: home.php");
            }
        } else {
            header("Location: login.html");
            return;
        }
    }

    public function new(){
        if (!isset($_POST["new"])) {
            header('Location: home.php');
        } else {
            $new = $_POST["new"];
            if (isset($_COOKIE["deseos"])) {
                $deseos = json_decode($_COOKIE["deseos"]);
            } else {
                $deseos = [];
            }
            $deseos[] = $new;
            setcookie("deseos", json_encode($deseos), time() + 3600);
            header('Location: home.php');  
        }
    }
    
    public function delete(){
        if (isset($_COOKIE["deseos"])) {
            $deseos = json_decode($_COOKIE["desos"]);
        } else {
            $deseos = [];
        }
        $id = $_GET["id"];
        unset($deseos[$id]);
        setcookie('deseos', json_encode($deseos), time() + 3600);
        header("Location: home.php");  
    }

    public function empty(){
        setcookie("deseos", "",  1);
        header("Location: home.php");    
    }

    public function close()
    {
        setcookie("deseos", "",  -7200);
        setcookie("nombreusu", "",  -7200);
        header("Location: " . $this->login());
    }
}
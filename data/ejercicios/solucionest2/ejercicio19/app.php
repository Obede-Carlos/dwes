<?php
class App{
    //metodo run para que funcionen los metodos.
    public function run(){
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = "app.php";
        }
        $this->$method();      
    }

    public function home(){
        //comprobar su ya esta establecida la cookie, mandaremos el metodo cambio.
        if (!isset($_COOKIE["color"])) {
            $this->cambio();
        } else {
            //echo con un style background-color para colorear el fondo.
            //mensaje de vienbenida
            //echo con enlace para cambiar el color de fondo.
            echo '<body style="background-color:' . $_COOKIE["color"] . '">';
            echo "<h1> Hola Usuario. </h1>";
            echo '<a href="' . $this->cambio() . '"> cambiar color del fondo </a>';
        }
    }

    //metodo cambio donde recogemos el color y lo metemos en la cookie.
    public function cambio(){
        include("colores.html");
        if (isset($_GET["color"])) {
            $color = $_GET["color"];
            setcookie("color",$color,time()+3600);
            header("Location: ?metod=home");
        }
    }
}
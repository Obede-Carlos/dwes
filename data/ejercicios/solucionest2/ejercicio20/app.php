<?php
class App{
    //metodo para que funcionen los metodos.
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
            //un enlace para cambiar de color de fondo.
            echo '<body style="background-color:' . $_SESSION["color"] . '">';
            echo "<h1> Hola Usuario. </h1>";
            echo '<a href="' . $this->cambio() . '"> cambiar color del fondo </a>';
        }
    }

    //funcion para realizar el cambio: oncluimos el fichero de los colores, lo recogemos en la sesion y mandamos al metodo home.
    public function cambio(){
        include("colores.html");
        if (isset($_GET["color"])) {
            $color = $_GET["color"];
            session_start();
            $_SESSION["color"] = $color;
            header("Location:" . $this->home());
        } 
    }
}
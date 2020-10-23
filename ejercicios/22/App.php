<?php
class App
{
    public function __construct()
    {
        session_start();
    }
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
        }

        $this->$method();
    }
    public function home()
    {
        echo "Bienvenido";
        include('views/home.php');

    }
    public function colores()
    {       
        var_dump($_POST['colores']);
        $_SESSION['colores']=$_POST['colores'];
        include('views/colores.php');
    }
    public function close()
    {
        session_destroy();
    }
}

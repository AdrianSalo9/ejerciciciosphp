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
            $method = 'index';
        }

        $this->$method();
    }
    public function login()
    { {

            if (isset($_SESSION['nombre'])) {
                echo 'Ya hay un usuario';
            } else {
                $_SESSION['nombre'];
                $_SESSION['contraseña'];
                include('views/login.php');
            }
        }
    }
    public function auth()
    {
              
        $nombre = $_POST["nombre"];
        $contraseña = $_POST["contraseña"];
        $_SESSION['nombre']=$nombre;
        $_SESSION['contraseña']=$contraseña;
        header('Location: /ejercicios/20?method=home');
    }
    public function home()
    {

        if (isset($_SESSION)) {
            echo 'Un saludo ' . $_SESSION['nombre'];
        }
        include('views/home.php');
    }
    public function logout()
    {
        session_destroy();
        header('Location: /ejercicios/20?method=login');
    }
}

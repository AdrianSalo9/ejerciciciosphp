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
            $method = 'login';
        }

        $this->$method();
    }
    public function login()
    {
        if (isset($_SESSION['nombre'])) {
            header('Location: ?method=home');
            return;
        }
        include('views/login.php');
    }
    public function auth()
    {
        if (isset($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            $contraseña = $_POST['nombre'];
            $_SESSION['nombre'] = $nombre;
            $_SESSION['contraseña'] = $contraseña;
        } else {
            header('Location: ?method=login');
            return;
        }
        header('Location: ?method=home');
    }
    public function home()
    {
        if (!isset($_SESSION['nombre'])) {
            header('Location: ?method=login');
            return;
        }
        if (isset($_SESSION['deseos'])) {
            $deseos = $_SESSION['deseos'];
        } else {
            $deseos = [];
        }
        include('views/home.php');
    }
    public function new()
    {
        if (!isset($_POST['deseos'])) {
            header('Location: index.php?method=home');
            return;
        }
        //$_SESSION['deseos'] = $_POST['deseos'];
        if (isset($_SESSION['deseos'])) {
            $deseos = $_SESSION['deseos'];
        } else {
            $deseos = [];
        }
        $deseos[]= $_POST['deseos'];
        $_SESSION['deseos']=$deseos;       
        header('Location: index.php?method=home');
    }

    public function delete()
    {
        if (isset($_SESSION['deseos'])) {
            $deseos = $_SESSION['deseos'];
        } else {
            $deseos = [];
        }
        $id = $_GET['id'];
        unset($deseos[$id]);
        $_SESSION['deseos']=$deseos; 
        header('Location: index.php?method=home');
    }

    public function empty()
    {
        unset($_SESSION['deseos']);
        //unset($_SESSION['nombre']);
        //unset($_SESSION['contraseña']);

        header('Location: index.php?method=home');
    }

    public function close()
    {
        session_destroy();

        header('Location: index.php?method=login');
    }
}

<?php 
class app 
{
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
    {   if (isset($_COOKIE['nombre'])) {
        echo 'Ya hay un usuario';
    }else{
        $_POST['nombre'];
        $_POST['contraseña'];
        //header('Location: /ejercicios/18?method=home');
        include('views/login.php');}
    }
    public function auth()
    {
        setcookie("nombre", $_POST['nombre'], time() + 150);
        setcookie("contraseña",$_POST['contraseña'], time() + 150);
        header('Location: /ejercicios/18?method=home');
        
    }
    public function home()
    {
        if (isset($_COOKIE)) {
            echo 'Un saludo '.$_COOKIE['nombre'];
        }
        include('views/home.php');
    }
    public function logout()
    {
        setcookie("nombre", $_POST['nombre'], time() -1);
        setcookie("contraseña",$_POST['contraseña'], time() -1);
        header('Location: /ejercicios/18?method=login');        
    }

}

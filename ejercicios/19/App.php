<?php 
class App 
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
    {
        {   if (isset($_COOKIE['nombre'])) {
            echo 'Ya hay un usuario';
        }else{
            $_POST['nombre'];
            $_POST['contraseña'];           
            include('views/login.php');}
        }
    }
    public function auth()
    {
        setcookie("nombre", $_POST['nombre'], time() + 150);
        setcookie("contraseña",$_POST['contraseña'], time() + 150);
        setcookie("deseos", $_POST['deseos[]'], time() + 150);
        header('Location: /ejercicios/19?method=home');
    }
    public function home()
    {
        if (isset($_COOKIE)) {
            echo 'Un saludo '.$_COOKIE['nombre'];
        }
        include('views/home.php');
    }
    
    public function new()
    {
        if (isset($_POST['deseos'])) {
            foreach($_POST['deseos'] as $deseo) {
              echo '<input type="text" name="deseos[]" value="' . $deseo . '"><br>';
              echo $_COOKIE['deseos[]'];
            }
          }
          include('views/home.php');
    }
    public function delete()
    {
        # code...
    }
    public function empty()
    {
        # code...
    }
    public function close()
    {
        # code...
    }
}
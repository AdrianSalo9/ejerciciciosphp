<?php
class app{
    public function run(){
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
          }           
          $this->$method();
    }
    public function fibonacci() { 
        $fibonacci=[];  
        $n1=1;
        $n2=0; 
        for ($i=0; $i < 30; $i++) { 
            $suma=$n1+$n2;
            $n1=$n2;
            $n2=$suma;
            $fibonacci[]=$suma;
        }
        include('views/fibonacci.php');
    }
    public function listaPares() 
    {     
        $pares=[];
        for ($i=0; $i <=100 ; $i++) { 
            if ($i%2==0) {
                $pares[]=$i;
            }
        }
        include('views/pares.php');
    }
    public function potencias()
    {
        $potencias=[];
        
        for ($i=0; $i <=24; $i++) { 
            $numero=pow(2,$i);
            $potencias[]=$numero;
        }
        include('views/potencias.php');
    }

    public function primos() {
        $primosbuenos=[];
        $primosmalos=[];    
    function primo($num)
    {
        if ($num == 2 || $num == 3 || $num == 5 || $num == 7) {
            return True;
        } else {
            // comprobamos si es par
            if ($num % 2 != 0) {
                // comprobamos solo por los impares
                for ($i = 3; $i <= sqrt($num); $i += 2) {
                    if ($num % $i == 0) {
                        return False;
                    }
                }
                return True;
            }
        }
        return False;
    }
    for ($i=1; $i<=100; $i++) {

        if (primo($i)) {
    
            //echo "<br>El número ".$i." es primo";
            $primosbuenos[]=$i;
        } else {
    
            //echo "<br>El número ".$i." NO es primo";
            $primosmalos[]=$i;
        }
    
    }
    include('views/primos.php');
}
}
?>
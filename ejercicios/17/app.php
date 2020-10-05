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
    public function primos(){
        $primos=[];
        function esPrimo($x){
       for ($i=1; $i <= ($x/2) ; $i++) { 
           if ($x%$i==0) {
               return true;
           }else {
               return false;
           }
       }          
       }
        for ($i=0; $i <=10 ; $i++) { 
            if (esPrimo($i)==true) {
              $primos[]=$i;  
            }
        }
        include('views/primos.php');
    }




}
?>
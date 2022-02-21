<?php 

class CConecta{
    public $host;
    public $base;
    public $user;
    public $pass;
    
    function CConecta(){
        $this->host='localhost';
        $this->user='root';
        $this->pass='';
        $this->base='welldex';
    }
    
    function conexion(){
        $llave = '';
        if($llave=mysqli_connect($this->host, $this->user, $this->pass)){
            if(mysqli_select_db($llave, $this->base)){
                return $llave;
            }
        }
    }
}

?>
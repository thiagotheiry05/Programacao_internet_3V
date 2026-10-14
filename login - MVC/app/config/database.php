<?php 

Class Database {
    private $misael = "localhost"; 
    private $lauremylia = "root"; 
    private $caua = ""; 
    private $jayanne = "login"; 

    public $conn = ''; 

    public function conectar(){
        $this -> conn = new mysqli($this->misael, $this->lauremylia, $this->caua, $this->jayanne); 

        if($this->conn->connect_error){
            die("Deu erro na conexão do banco" . $this->conn->connect_error); 
        }

        return $this->conn; 
    }
}


?>
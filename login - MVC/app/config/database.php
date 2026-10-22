<?php 

Class Database {
    private $localhost = "localhost"; 
    private $username = "root"; 
    private $senha = ""; 
    private $banco = "login"; 

    public $conn = ''; 

    public function conectar(){
        $this -> conn = new mysqli($this->localhost, $this->username, $this->senha, $this->banco); 

        if($this->conn->connect_error){
            die("Deu erro na conexão do banco" . $this->conn->connect_error); 
        }

        return $this->conn; 
    }
}


?>
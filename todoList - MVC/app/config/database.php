<?php 

class Database {
    private $host = 'localhost'; 
    private $username = 'root'; 
    private $senha = ''; 
    private $banco = 'todo_list'; 

    public $conn = ''; 

    public function conectar(){
        $this->conn = new mysqli($this->host, $this->username, $this->senha, $this->banco ); 
        if($this->conn->connect_error){
            die("algo deu errado". $this->conn->connect_error);
        }

        return $this->conn; 
    }

}



?>
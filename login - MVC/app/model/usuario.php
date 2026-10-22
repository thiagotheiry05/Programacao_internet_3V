<?php 

require_once __DIR__ . '/../config/database.php'; 

Class Usuario{
    private $conn; 

    public function __construct(){
        $db = new Database(); 
        $this->conn = $db->conectar(); 
    }

    public function buscarPorEmail($email){
        $sql = "SELECT * FROM usuarios WHERE email = ?";
         $stmt = $this->conn->prepare($sql); 
         $stmt->bind_param("s", $email); 
         $stmt->execute();

         $resultado = $stmt->get_result();
         return $resultado->fetch_assoc();
    }
}



?>
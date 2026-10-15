<?php

class Database {
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $database = "login";

    public function conectar() {
        $conn = new mysqli(
            $this->host,
            $this->usuario,
            $this->senha,
            $this->database
        );

        if ($conn->connect_error) {
            die("Erro ao conectar ao banco de dados");
        }

        $conn->set_charset("utf8mb4");

        return $conn;
    }
}


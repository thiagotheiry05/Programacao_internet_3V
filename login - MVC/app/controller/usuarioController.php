<?php 

require_once __DIR__ . "/../model/usuario.php";

Class UsuarioController{

    private $usuarioModel;
    
    public function __construct() {
        $this->usuarioModel = new Usuario();
    }

    public function index(){
        if(isset($_SESSION['id'])){
            header("Location: index.php?action=painel");
            exit;
        }
        include __DIR__ . '/../view/login.php';
    }

    public function autenticar(){
        if(!isset($_POST['email'], $_POST['senha'])){
            header("Location: index.php");
            exit;
        }

        $email = trim($_POST['email']);
        $senha = $_POST['senha'];

        if(empty($email) || empty($senha)){
            $erro = "Preencha corretamente seu email ou senha"; 
            include __DIR__ . '/../view/login.php';
            exit; 
        }

        $usuario = $this->usuarioModel->buscarPorEmail($email); 

        if($usuario && password_verify($senha, $usuario['senha'])){
            session_regenerate_id(true); 

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: index.php?action=painel"); 
            exit;
        }

        $erro = "Preencher corretamente sua senha ou email"; 
        include __DIR__ . '/../view/login.php';
    }

    public function painel(){
        if(!isset($_SESSION['id'])){
            header("Location: index.php");
        }

        include __DIR__ . "/../view/painel.php";
    }

    public function logout(){
        session_destroy(); 

        header("Location: index.php");
        exit; 
    }


}
?>
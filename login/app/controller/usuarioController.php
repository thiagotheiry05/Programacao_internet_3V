<?php

require_once __DIR__ . '/../model/usuario.php';

class UsuarioController {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new Usuario();
    }

    // Exibir formulário
    public function index() {
        include __DIR__ . '/../view/login.php';
    }

    // Realizar login
    public function login() {

        $email = trim($_POST['email'] ?? '');
        $senha = $_POST['senha'] ?? '';

        if (empty($email) || empty($senha)) {
            $erro = "Preencha e-mail e senha!";
            include __DIR__ . '/../view/login.php';
            return;
        }

        $usuario = $this->usuarioModel->buscarPorEmail($email);

        if ($usuario && password_verify($senha, $usuario['senha'])) {

            session_regenerate_id(true);

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: index.php?action=painel");
            exit;
        }

        $erro = "E-mail ou senha incorretos!";
        include __DIR__ . '/../view/login.php';
    }

    // Exibir painel
    public function painel() {

        if (!isset($_SESSION['id'])) {
            header("Location: index.php");
            exit;
        }

        include __DIR__ . '/../view/painel.php';
    }

    // Encerrar sessão
    public function logout() {

        $_SESSION = [];

        session_destroy();

        header("Location: index.php");
        exit;
    }
}
<?php 

require_once __DIR__ . '/../model/tarefa.php';

class tarefaController{
    private $tarefaModel; 

    public function __construct(){
        $this->tarefaModel = new Tarefa(); 
    }

    public function index(){
        $tarefa = $this->tarefaModel->listar(); 
        include __DIR__ . '/../view/listar.php'; 
    }

    public function criar(){
        if(isset($_POST['descricao']) && !empty(trim($_POST['descricao']))){
            $this->tarefaModel->criar($_POST['descricao']);
        }
        header("Location: index.php");
    }

    public function excluir(){
        if(isset($_GET['id'])){
            $this->tarefaModel->excluir($_GET['id']);
        }
        header("Location: index.php"); 
    }
    
}


?>
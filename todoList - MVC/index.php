<?php
require_once __DIR__ . '/app/controller/controller.php'; 
$controller = new tarefaController(); 
$action = $_GET['action'] ?? 'index';
switch ($action){
    case 'criar': 
        $controller->criar(); 
        break; 
    case 'excluir': 
        $controller->excluir(); 
        break; 
    case 'editar':
        $controller->editar();
        break;
    default:
        $controller->index(); 
        break; 
}
?>
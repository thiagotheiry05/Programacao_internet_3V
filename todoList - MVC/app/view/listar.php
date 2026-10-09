<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>To-Do List (MVC)</title>
    <style>
        .modal {
            display: none;

            position: fixed;
            top: 0;
            left: 0;

            width: 100%;
            height: 100%;

            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-conteudo {
            background-color: white;

            width: 400px;

            margin: 150px auto;
            padding: 20px;

            border-radius: 10px;
        }
    </style>
</head>
<body>

    <h1>TO-DO List (MVC)</h1>

    <form action="index.php?action=criar" method="POST">
        <input type="text" name="descricao" placeholder="Descrição da tarefa">
        <button type="submit">Adicionar</button>
    </form>

    <h2>Suas tarefas</h2>
    <?php if (!empty($tarefas)): ?>
        <ul>
            <?php foreach ($tarefas as $tarefa): ?>
                <li>
                    <?php echo ($tarefa['descricao']); ?>
                    <a href="index.php?action=excluir&id=<?php echo $tarefas[0]['id']; ?>">
                        Excluir
                    </a>
                    <button
                        onclick="abrirModal(<?php echo $tarefa['id']; ?>,
                            '<?php echo ($tarefa['descricao']); ?>')">
                        Editar
                    </button>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Não há tarefas ainda!</p>
    <?php endif; ?>

    <?php include __DIR__ . '\modalEditar.php'; ?>

    <script>
        function abrirModal(id, descricao){
            document.getElementById("modalEditar").style.display = "block"
            document.getElementById("valorId").value = id
            document.getElementById("editarDescricao").value = descricao
        }

        function fecharModal(){
            document.getElementById("modalEditar").style.display = "none"
        }
    </script>

</body>
</html>
<div id="modalEditar" class="modal">

    <div class="modal-conteudo">

        <h2>Editar tarefa</h2>

        <form action="index.php?action=editar" method="POST">

            <input type="hidden" name="id" id="valorId">

            <input type="text" name="descricao" id="editarDescricao" >

            <button type="submit"> Salvar </button>

            <button type="button" onclick="fecharModal()">Cancelar</button>

        </form>

    </div>

</div>
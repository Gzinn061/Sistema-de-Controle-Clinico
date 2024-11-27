<link rel="stylesheet" href="style.css">
<div class="salvar">
    <h1>Editar Consulta</h1>
    <?php
    $sql = "SELECT * FROM consulta WHERE id_consulta=" . $_REQUEST['id_consulta'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();


    ?>
    <form action="?page=salvar-consulta" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id_consulta" value="<?php
                                                        print $row->id_consulta; ?>">
        <div class="mb-3">
            <label>Nome do Paciente</label>
            <input type="text" name="nome_paciente" class="form-control" required value="<?php print $row->paciente_id_paciente; ?>">
        </div>

        <div class="mb-3">
            <label>Data da Consulta</label>
            <input type="date" name="dia_consulta" class="form-control" required value="<?php print $row->dia_consulta; ?>">
        </div>

        <div class="mb-3">
            <label>Hora da Consulta</label>
            <input type="time" name="hora_consulta" class="form-control" required value="<?php print $row->hora_consulta; ?>">
        </div>

        <div class="mb-3">
            <label>Descrição da Consulta</label>
            <input type="text" name="descricao_consulta" class="form-control" required value="<?php print $row->descricao_consulta; ?>">
        </div>
        <div class=" mb-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
<link rel="stylesheet" href="style.css">
<div class="salvar">
    <h1>Editar Medicações</h1>
    <?php
    $sql = "SELECT * FROM medicacao WHERE id_medicacao=" . $_REQUEST['id_medicacao'];

    $res = $conn->query($sql);

    $row = $res->fetch_object();


    ?>
    <form action="?page=salvar-medicacao" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id_medicacao" value="<?php
                                                        print $row->id_medicacao; ?>">
        <div class="mb-3">
            <label>Nome do Paciente</label>
            <input type="text" name="paciente_id_paciente" class="form-control" required value="<?php print $row->paciente_id_paciente; ?>">
        </div>

        <div class="mb-3">
            <label>Nome do Médico</label>
            <input type="text" name="medico_id_medico" class="form-control" required value="<?php print $row->medico_id_medico; ?>">
        </div>

        <div class="mb-3">
            <label>Nome da Medicação</label>
            <input type="text" name="nome_medicacao" class="form-control" required value="<?php print $row->nome_medicacao; ?>">
        </div>

        <div class="mb-3">
            <label>Dosagem da Medicação</label>
            <input type="text" name="dosagem_medicacao" class="form-control" required value="<?php print $row->dosagem_medicacao; ?>">
        </div>
        <div class=" mb-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
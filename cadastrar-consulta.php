<link rel="stylesheet" href="style.css">

<div class="cadastrar" id="cadastrar-consulta">
    <h1>Cadastrar Consulta</h1>
</div>


<div class="salvar" id="salvar-consulta">
    <form action="?page=salvar-consulta" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome do Paciente</label>
            <select name="paciente_id_paciente" class="form-control">
                <option>=-Escolha um Paciente-=</option>
                <?php
                $sql_1 = "SELECT id_paciente, nome_paciente FROM paciente";

                $res_1 = $conn->query($sql_1);

                $qtd_1 = $res_1->num_rows;

                if ($qtd_1 > 0) {
                    while ($row_1 = $res_1->fetch_object()) {
                        echo "<option value='" . $row_1->id_paciente . "'>" . $row_1->nome_paciente . "</option>";
                    }
                } else {
                    echo "<option>Nenhum paciente encontrado!</option>";
                }
                ?>
            </select>
        </div>
</div>

<div class="salvar" id="salvar-consulta">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome do Médico</label>
        <select name="medico_id_medico" class="form-control">
            <option>=-Escolha um Médico-=</option>
            <?php
            $sql_2 = "SELECT id_medico, nome_medico FROM medico";

            $res_2 = $conn->query($sql_2);

            $qtd_2 = $res_2->num_rows;

            if ($qtd_2 > 0) {
                while ($row_2 = $res_2->fetch_object()) {
                    echo "<option value='" . $row_2->id_medico . "'>" . $row_2->nome_medico . "</option>";
                }
            } else {
                echo "<option>Nenhum médico encontrado!</option>";
            }
            ?>
        </select>
    </div>
</div>

<div class="salvar" id="dia-consulta">
    <div class="mb-3">
        <label>Data da Consulta</label>
        <input type="date" name="data_consulta" class="form-control" required maxlength="8">
    </div>
</div>

<div class="salvar" id="hora-consulta">
    <div class="mb-3">
        <label>Horário da Consulta</label> <br>
        <input type="time" name="hora_consulta" class="form-control" required min="08:00" max="18:00">
        <br>
    </div>
</div>

<div class="salvar" id="salvar-consulta">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Descrição da Consulta</label>
        <textarea name="descricao_consulta" class="form-control" placeholder="Digite o motivo da sua consulta" required max="250"></textarea>
    </div>
</div>


<div class="save-form" id="salvar-form">
    <div class="mb-3">
        <button id="button" submit" class="btn btn-success">Salvar</button>
    </div>
</div>
</form>
<link rel="stylesheet" href="style.css">
<div class="cadastrar">
    <h1>Cadastrar Medicações</h1>
</div>

<div class="salvar" id="salvar-medicacao">
    <form action="?page=salvar-medicacao" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome da Medicação</label>
            <select name="paciente_id_paciente" class="form-control">
                <option>Escolha um Paciente para atribuir a medicação</option>
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

        <div class="salvar" id="salvar-consulta">
            <input type="hidden" name="acao" value="cadastrar">
            <div class="mb-3">
                <label>Nome do Médico</label>
                <select name="medico_id_medico" class="form-control">
                    <option>Escolha o Médico que autorizou a medicação</option>
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

        <div class="salvar" id="salvar-medicacao">
            <input type="hidden" name="acao" value="cadastrar">
            <div class="mb-3">
                <label>Descrição e Dosagem da Medicação</label>
                <textarea name="dosagem_medicacao" class="form-control" placeholder="Digite a Descrição e Dosagem da Medicação!" required max="250"></textarea>
            </div>
        </div>
</div>
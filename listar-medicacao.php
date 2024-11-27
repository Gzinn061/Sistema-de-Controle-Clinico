<link rel="stylesheet" href="style.css">
<div class="salvar">
    <h1>Listar Medicações</h1>
    <?php
    $sql = "SELECT * FROM medicacao AS md
        INNER JOIN paciente AS p ON p.id_paciente = md.paciente_id_paciente
        INNER JOIN medico AS m ON m.id_medico = md.medico_id_medico";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Paciente</th>";
        print "<th>Médico</th>";
        print "<th>Dosagem</th>";
        print "<th>Ações</th>";
        print "</tr>";

        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id_medicacao . "</td>";
            print "<td>" . $row->nome_paciente . "</td>";
            print "<td>" . $row->nome_medico . "</td>";
            print "<td>" . $row->dosagem_medicacao . "</td>";
            print "<td>

            <button class='btn btn-success' 
				onclick=\"
				location.href='?page=editar-medicacao&id_medicacao="
                . $row->id_medicacao . "';\">Editar</button>   
            <button class ='btn btn-danger'onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-medicacao&acao=excluir&id_medicacao=" . $row->id_medicacao . "';}else{false;}\">Excluir</button>
				</td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "Não encontrou resultados!";
    }
    ?>
</div>
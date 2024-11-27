
<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $paciente = $_POST['paciente_id_paciente'];
        $medico = $_POST['medico_id_medico'];
        $nome_med = $_POST['nome_medicacao'];
        $dosagem = $_POST['dosagem_medicacao'];

        $sql = "INSERT INTO medicacao (
							paciente_id_paciente,
							medico_id_medico,
                            nome_medicacao,
							dosagem_medicacao
					) VALUES (
						'{$paciente}',
						'{$medico}',
						'{$nome_med}',
						'{$dosagem}'
					)";
        $res = $conn->query($sql);


        if ($res == true) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-medicacao';</script>";
        } else {
            print "<script>alert('Deu errado');</script>";
            print "<script>location.href='?page=listar-medicacao';</script>";
        }
        break;
    case 'editar':
        $paciente = $_POST['paciente_id_paciente'];
        $medico = $_POST['medico_id_medico'];
        $nome_med = $_POST['nome_medicacao'];
        $dosagem = $_POST['dosagem_medicacao'];

        $sql = "UPDATE medicacao SET
						paciente_id_paciente='{$paciente}',
						medico_id_medico='{$medico}',
						nome_medicacao='{$nome_med}',
						dosagem_medicacao='{$dosagem}'
					WHERE
						id_medicacao=" . $_REQUEST["id_medicacao"];


        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-medicacao';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-medicacao';</script>";
        }

        break;
    case 'excluir':
        $sql = "DELETE FROM medicacao WHERE id_medicacao=" . $_REQUEST['id_medicacao'];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-medicacao';</script>";
        } else {
            print "<script>alert('Deu errado');</script>";
            print "<script>location.href='?page=listar-medicacao';</script>";
        }
        break;
}

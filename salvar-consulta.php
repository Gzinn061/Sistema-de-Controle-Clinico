
<?php
switch (@$_REQUEST['acao']) {
    case 'cadastrar':
        $dia_consulta = $_REQUEST['dia_consulta'];
        $hora_consulta = $_REQUEST['hora_consulta'];
        $descricao_consulta = $_REQUEST['descricao_consulta'];

        $sql = "INSERT INTO consulta (
							dia_consulta,
							hora_consulta,
							descricao_consulta
					) VALUES (
						'{$dia_consulta}',
						'{$hora_consulta}',
						'{$descricao_consulta}'
					)";
        $res = $conn->query($sql);


        if ($res == true) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-consulta';</script>";
        } else {
            print "<script>alert('Deu errado');</script>";
            print "<script>location.href='?page=listar-consulta';</script>";
        }
        break;
    case 'editar':
        $dia_consulta = $_POST['dia_consulta'];
        $hora_consulta = $_POST['hora_consulta'];
        $descricao_consulta = $_POST['descricao_consulta'];

        break;
    case 'excluir':
        $sql = "DELETE FROM consulta WHERE id_consulta=" . $_REQUEST['id_consulta'];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-consulta';</script>";
        } else {
            print "<script>alert('Deu errado');</script>";
            print "<script>location.href='?page=listar-consulta';</script>";
        }
        break;
}

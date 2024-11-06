<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome_paciente"];
        $cpf = $_POST["cpf_paciente"];
        $data = $_POST["dt_nasc_paciente"];
        $email = $_POST["email_paciente"];
        $endereco = $_POST["endereco_paciente"];
        $fone = $_POST["fone_paciente"];
        $sexo = $_POST["sexo_paciente"];

        $sql = "INSERT INTO paciente (
						nome_paciente,
						cpf_paciente,
						dt_nasc_paciente,
						email_paciente,
						endereco_paciente,
						fone_paciente,
						sexo_paciente)
					VALUES (
						'{$nome}',
						'{$cpf}',
						'{$data}',
						'{$email}',
						'{$endereco}',
						'{$fone}',
						'{$sexo}')";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrou com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }

        break;

    case 'editar':
        $nome = $_POST["nome_paciente"];
        $cpf = $_POST["cpf_paciente"];
        $data = $_POST["dt_nasc_paciente"];
        $email = $_POST["email_paciente"];
        $endereco = $_POST["endereco_paciente"];
        $fone = $_POST["fone_paciente"];
        $sexo = $_POST["sexo_paciente"];

        $sql = "UPDATE paciente SET
						nome_paciente='{$nome}',
						cpf_paciente='{$cpf}',
						dt_nasc_paciente='{$data}',
						email_paciente='{$email}',
						endereco_paciente='{$endereco}',
						fone_paciente='{$fone}',
						sexo_paciente='{$sexo}'
					WHERE
						id_paciente=" . $_POST['id_paciente'];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Editou com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }
        break;

    case 'excluir':
        $sql = "DELETE FROM paciente WHERE id_paciente=" . $_REQUEST["id_paciente"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluiu com sucesso!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        } else {
            print "<script>alert('Deu errado!');</script>";
            print "<script>location.href='?page=listar-paciente';</script>";
        }
        break;
}

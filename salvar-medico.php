
<?php
	switch (@$_REQUEST['acao']) {
		case 'cadastrar':
			$nome = $_REQUEST['nome_medico'];
			$crm = $_REQUEST['crm_medico'];
			$especialidade = $_REQUEST['especialidade_medico'];

			$sql = "INSERT INTO medico (
							nome_medico,
							crm_medico,
							especialidade_medico
					) VALUES (
						'{$nome}',
						'{$crm}',
						'{$especialidade}'
					)";
				$res = $conn->query($sql);
			

				if ($res==true) {
					print "<script>alert('Cadastrou com sucesso!');</script>";
					print "<script>location.href='?page=listar-medico';</script>";
				} else {
					print "<script>alert('Deu errado');</script>";
					print "<script>location.href='?page=listar-medico';</script>";
				}
				break;
				case 'editar':

				break;
				case 'excluir':
				
	}
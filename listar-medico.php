<link rel="stylesheet" href="style.css">
<div class="salvar">
	<h1>Listar Médicos</h1>
	<?php
	$sql = "SELECT * FROM medico";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;


	if ($qtd > 0) {
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>CRM</th>";
		print "<th>Especialidade</th>";
		print "<th>Ações</th>";
		print "</tr>";
		$count = 1;
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>" . $count++ . "</td>";
			print "<td>" . $row->nome_medico . "</td>";
			print "<td>" . $row->crm_medico . "</td>";
			print "<td>" . $row->especialidade_medico . "</td>";
			print "<td>
			 	<button class='btn btn-success' 
				onclick=\"
				location.href='?page=editar-medico&id_medico="
				. $row->id_medico . "';\">Editar</button>
			 	
				<button class ='btn btn-danger'onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-medico&acao=excluir&id_medico=" . $row->id_medico . "';}else{false;}\">Excluir</button>
				</td>";
			print "</tr>";
		}
		print "</table>";
	} else {
		print "Não encontrou resultados!";
	}
	?>
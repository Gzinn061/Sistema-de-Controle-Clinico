<h1>Listar Médico</h1>
<?php
	$sql = "SELECT * FROM medico";

	$res = $conn ->query($sql);

	$qtd = $res->num_rows;


	if ($qtd > 0) {
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>CRM</th>";
		print "<th>Especialidade</th>";
		print "</tr>";
		while  ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->id_medico."</td>";
			print "<td>".$row->nome_medico."</td>";
			print "<td>".$row->crm_medico."</td>";
			print "<td>".$row->especialidade_medico."</td>";
			print "</tr>";
		}
		print "</table>";
	} else {
		print "Não encontrou resultados!";
	}
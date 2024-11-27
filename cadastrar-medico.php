<link rel="stylesheet" href="style.css">

<div class="cadastrar" id="cadastrar-medico">
	<h1>Cadastrar Médico</h1>
</div>


<div class="salvar" id="salvar-medico">
	<form action="?page=salvar-medico" method="POST">
		<input type="hidden" name="acao" value="cadastrar">
		<div class="mb-3">
			<label>Nome do Médico</label>
			<input type="text" name="nome_medico" class="form-control" placeholder="Digite o primeiro e último nome do Médico!">
		</div>
</div>

<div class="salvar" id="crm-medico">
	<div class="mb-3">
		<label>CRM</label>
		<input type="text" name="crm_medico" class="form-control" placeholder="0000-DF" required>
	</div>
</div>

<div class="salvar" id="especialidade-medico">
	<div class="mb-3">
		<label>Especialidade</label>
		<input type="text" name="especialidade_medico" class="form-control" placeholder="Ex: Pediatra" required>
	</div>
</div>

<div class="save-form" id="salvar-form">
	<div class="mb-3">
		<button id="button" submit" class="btn btn-success">Salvar</button>
	</div>
</div>
</form>
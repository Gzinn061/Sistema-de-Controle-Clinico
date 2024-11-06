<link rel="stylesheet" href="styles.css">

<div class="cadastrar" id="cadastrar-consulta">
    <h1>Cadastrar Consulta</h1>
</div>


<div class="salvar" id="salvar-consulta">
    <form action="?page=salvar-consulta" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome do Paciente</label>
            <input type="text" name="nome_consulta" class="form-control" placeholder="Digite seu nome e ultimo nome" required>
        </div>
</div>

<div class="salvar" id="dia-consulta">
    <div class="mb-3">
        <label>Data da Consulta</label>
        <input type="date" name="dia_consulta" class="form-control" required maxlength="8">
    </div>
</div>

<div class="salvar" id="hora-consulta">
    <div class="mb-3">
        <label>Horário da Consulta</label> <br>
        <input type="time" name="hora-consulta" class="form-control" required min="08:00" max="18:00">
        <br>
    </div>
</div>

<div class="salvar" id="fone-paciente">
    <label>Telefone</label>
    <input type="text" id="telefone" name="telefone" maxlength="15" placeholder="(XX) XXXXX-XXXX" required class="form-control">
    <script>
        const telefoneInput = document.getElementById('telefone');
        telefoneInput.addEventListener('input', function() {
            let value = telefoneInput.value.replace(/\D/g, '');
            value = value.replace(/^(\d{2})(\d)/, '($1) $2');
            value = value.replace(/(\d{5})(\d)/, '$1-$2');
            telefoneInput.value = value.slice(0, 15);
        });
    </script>

    <div class="salvar" id="salvar-consulta">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Descrição da Consulta</label>
            <input type="text" name="descricao_consulta" class="form-control" placeholder="Digite o motivo da sua consulta" required max="250">
        </div>
    </div>


    <div class="save-form" id="salvar-form">
        <div class="mb-3">
            <button id="button" submit" class="btn btn-success">Salvar</button>
        </div>
    </div>
    </form>
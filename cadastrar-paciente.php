<link rel="stylesheet" href="style.css">

<div class="cadastrar" id="cadastrar-paciente">
    <h1>Cadastrar Paciente</h1>
</div>


<div class="salvar" id="salvar-paciente">
    <form action="?page=salvar-paciente" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label>Nome do Paciente</label>
            <input type="text" name="nome_paciente" class="form-control" placeholder="Digite seu nome e ultimo nome" required>
        </div>
</div>

<div class="salvar" id="cpf-paciente">
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf_paciente" class="form-control" maxlength="14" placeholder="000.000.000-00" required>
        <script>
            const cpfInput = document.getElementById('cpf_paciente');
            cpfInput.addEventListener('input', function() {
                let value = cpfInput.value.replace(/\D/g, ''); // Remove tudo que não é número
                value = value.replace(/(\d{3})(\d)/, '$1.$2'); // Formata como XXX.XXX.XXX-XX
                value = value.replace(/(\d{3})(\d)/, '$1.$2');
                value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
                cpfInput.value = value;
            });
        </script>
    </div>
</div>

<div class="salvar" id="email-paciente">
    <div class="mb-3">
        <label>E-Mail</label>
        <input type="mail" name="email_paciente" class="form-control" placeholder="Digite seu melhor E-mail." required>
    </div>
</div>

<div class="salvar" id="dt_nasc_paciente">
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="dt_nasc_paciente" class="form-control" required maxlength="8">
    </div>
</div>

<div class="salvar" id="sexo_paciente">
    <div class="mb-3">
        <label>Sexo</label> <br> <br>
        <label><input type="radio" name="sexo_paciente" value="m">Masculino</input></label> <br> <br>
        <label><input type="radio" name="sexo_paciente" value="f">Feminino</input></label>
    </div>
</div>

<div class="salvar" id="fone_paciente">
    <label>Telefone</label>
    <input type="text" id="fone_paciente" name="fone_paciente" maxlength="15" placeholder="(XX) XXXXX-XXXX" required class="form-control">
    <script>
        const telefoneInput = document.getElementById('telefone');
        telefoneInput.addEventListener('input', function() {
            let value = telefoneInput.value.replace(/\D/g, '');
            value = value.replace(/^(\d{2})(\d)/, '($1) $2');
            value = value.replace(/(\d{5})(\d)/, '$1-$2');
            telefoneInput.value = value.slice(0, 15);
        });
    </script>

    <div class="salvar" id="endereco_paciente">
        <div class="mb-3">
            <label for="rua">Rua</label>
            <input type="text" id="rua" name="rua" class="form-control" placeholder="Rua Exemplo" required>
        </div>
        <div class="mb-3">
            <label for="numero">Número</label>
            <input type="text" id="numero" name="numero" class="form-control" placeholder="123" required>
        </div>
        <div class="mb-3">
            <label for="complemento">Complemento</label>
            <input type="text" id="complemento" name="complemento" class="form-control" placeholder="Apto, Bloco, etc.">
        </div>
        <div class="mb-3">
            <label for="bairro">Bairro</label>
            <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro Exemplo" required>
        </div>
        <div class="mb-3">
            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade Exemplo" required>
        </div>
        <div class="mb-3">
            <label for="estado">Estado</label>
            <select id="estado" name="estado" class="form-control" required>
                <option value="">Selecione</option>
                <option value="AC">Distrito Federal</option>
                <option value="AL">Alagoas</option>
                <!-- Adicionar todos os estados -->
                <option value="SP">São Paulo</option>
                <option value="RJ">Rio de Janeiro</option>
                <!-- Outros estados -->
            </select>
        </div>
        <div class="mb-3" id="cep_paciente">
            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" class="form-control" maxlength="9" placeholder="00000-000" required>
        </div>
    </div>



    <div class="save-form" id="salvar-form">
        <div class="mb-3">
            <button id="button" submit" class="btn btn-success">Salvar</button>
        </div>
    </div>
    </form>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNGME | Cadastro de Funcionário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro</h1>
        <p class="subtitle">Adicione um novo funcionário ao sistema</p>

        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'success') {
                echo '<div class="success-message">Funcionário cadastrado com sucesso!</div>';
            } elseif ($_GET['status'] == 'error') {
                echo '<div class="error-message">Erro ao cadastrar. Tente novamente.</div>';
            }
        }
        ?>

        <form action="processa_cadastro.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail Corporativo</label>
                <input type="email" id="email" name="email" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="cargo">Cargo</label>
                <input type="text" id="cargo" name="cargo" placeholder="" required>
            </div>

            <div class="form-group">
                <label for="departamento">Departamento</label>
                <select id="departamento" name="departamento" required>
                    <option value="" disabled selected>Selecione a Direcção/Departamento</option>
                    <option value="INSPENCAO">Inspecção da Educação e Desenvolvimento Humano</option>
                    <option value="DINEP">Direcção Nacional de Ensino Primário</option>
                    <option value="DINES">Direcção Nacional de Ensino Secundário</option>
                    <option value="DINAEA">Direcção Nacional de Alfabetização e Educação de Adultos</option>
                    <option value="DNFP">Direcção Nacional de Formação de Professores</option>
                    <option value="DNGGQ">Direcção Nacional de Gestão e Garantia da Qualidade</option>
                    <option value="DINUSE">Direcção de Nutrição e Saúde Escolar</option>
                    <option value="DAT">Direcção de Assuntos Transversais</option>
                    <option value="DIPLAC">Direcção de Planificação e Cooperação</option>
                    <option value="DRH">Direcção de Recursos Humanos</option>
                    <option value="DAF">Direcção de Administração e Finanças</option>
                    <option value="DIEE">Direcção de Infra-estruturas e Equipamentos Escolares</option>
                    <option value="GJ">Gabinete Jurídico</option>
                    <option value="GM">Gabinete do Ministro</option>
                    <option value="DEE">Departamento de Educação Especial</option>
                    <option value="DGLMD">Departamento de Gestão do Livro Escolar e Materiais Didácticos</option>
                    <option value="DTIC">Departamento de Tecnologias de Informação e Comunicação</option>
                    <option value="DCI">Departamento de Comunicação e Imagem</option>
                    <option value="DAQUI">Departamento de Aquisições</option>
                    <option value="DDOC">Departamento de Documentação</option>
                </select>
            </div>

            <button type="submit" class="btn-submit">Finalizar Cadastro</button>
        </form>
    </div>
</body>

</html>
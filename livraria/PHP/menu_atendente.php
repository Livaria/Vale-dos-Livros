<!DOCTYPE html>
<html>

<head>
    <title>Atendentes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/inputmask.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url("http://localhost/livraria/img/imagens_trabalho.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            align-items: center;
        }

        .titulo {
            color: #ffffffe8;
            text-shadow: 0px 2px 5px black;
            font-size: 32px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin-top: 20px;
        }

        .custom-label {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container rounded p-4" style="box-shadow: 0px 0px 10px rgba(0,0,0,0.5);">
            <h2 class="text-center mb-4 titulo">Cadastro de Atendente</h2>
            <form method="post" action="salvar/salvar_atd.php">
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="nome" class="custom-label">Nome Completo:</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="turno" class="custom-label">Sexo:</label>
                        <select class="form-control" name="sexo">
                            <option value="" selected disabled>Escolha</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="telefone" class="custom-label">Número de Telefone:</label>
                        <input type="text" class="form-control" name="telefone"
                            data-inputmask="'mask': '(99) 99999-9999'" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cpf" class="custom-label">CPF:</label>
                        <input type="text" class="form-control" name="cpf" data-inputmask="'mask': '999.999.999-99'"
                            required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="data_nascimento" class="custom-label">Data de Nascimento:</label>
                        <input type="date" class="form-control" name="data_nascimento" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="data_contrato" class="custom-label">Data de Contrato:</label>
                        <input type="date" class="form-control" name="data_contrato" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="turno" class="custom-label">Turno:</label>
                        <select class="form-control" name="turno">
                            <option value="" selected disabled>Escolha</option>
                            <option value="Manhã">Manhã</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noite">Noite</option>
                            <option value="Integral">Integral</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-11">
                        <button type="submit" class="btn btn-primary" onclick="salvar_atendente()">Cadastrar</button>
                    </div>
                    <div class="form-group col-md-1">
                        <button type="button" class="btn btn-secondary" id="menuButton"
                            href='http://localhost/livraria/PHP'>Menu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dataContratoInput = document.querySelector('input[name="data_contrato"]');
            const dataAtual = new Date().toISOString().split('T')[0];
            dataContratoInput.value = dataAtual;
        });

        document.getElementById("menuButton").addEventListener("click", function () {
            window.location.href = "http://localhost/livraria/PHP";
        });
    </script>
</body>

</html>
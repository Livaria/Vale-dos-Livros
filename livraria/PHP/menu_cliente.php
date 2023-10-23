<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/inputmask.min.js"></script>

    <!-- Inclua o seu arquivo JavaScript -->
    <script src="formataçãodeCampos.js"></script>


    <style>
        .custom-label {
            font-size: 14px;
        }
    </style>

</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container rounded p-4" style="box-shadow: 0px 0px 10px rgba(0,0,0,0.5);">
            <h2 class="text-center mb-4 titulo">Cadastro de Cliente</h2>
            <form method="post" action="salvar/salvar_cli.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nome" class="custom-label">Nome Completo:</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="endereco" class="custom-label">Endereço:</label>
                        <input type="text" class="form-control" name="endereco" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="telefone" class="custom-label">Número de Telefone:</label>
                        <input type="text" class="form-control" name="telefone"
                            data-inputmask="'mask': '(99) 99999-9999'" onblur="formatarTelefone(this)" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cpf" class="custom-label">CPF:</label>
                        <input type="text" class="form-control" name="cpf" data-inputmask="'mask': '999.999.999-99'"
                            onblur="formatarCPF(this)" required>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="data_nascimento" class="custom-label">Data de Nascimento:</label>
                        <input type="date" class="form-control" name="data_nascimento" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sexo" class="custom-label">Sexo:</label>
                        <select class="form-control" name="sexo" required>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-11">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                    <div class="form-group col-md-1">
                        <button type="button" class="btn btn-secondary" id="menuButton"
                            href='http://localhost/livraria/PHP'>Menu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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

        .container-box {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 10px black;
            padding: 20px;
            border-radius: 10px;
        }

        .custom-label {
            margin-bottom: 20px;
            font-size: 1.1rem;
            text-shadow: 0px 1px black;
        }
    </style>
    <script>
        document.getElementById("menuButton").addEventListener("click", function () {
            window.location.href = "http://localhost/livraria/PHP";
        });
    </script>
</body>

</html>
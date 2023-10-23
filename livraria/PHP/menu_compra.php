<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Realizar Compra</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url("http://localhost/livraria/img/imagens_trabalho.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100vh;
            justify-content: flex-end;
            align-items: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2 class="text-center">COMPRA</h2>
            <form id="cadastroCompraForm" method="post" action="salvar/salvar_comp.php">
                <div class="form-group">
                    <label for="tituloLivro">Título do Livro:</label>
                    <input type="text" class="form-control" id="tituloLivro" name="tituloLivro"
                        placeholder="Digite aqui">
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade:</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade"
                        placeholder="Digite aqui">
                </div>
                <div class="form-group">
                    <label for="valorUnidade">Valor da Unidade:</label>
                    <input type="number" class="form-control" id="valorUnidade" name="valorUnidade"
                        placeholder="Digite aqui">
                </div>
                <div class="form-group">
                    <label for="nomeCliente">Nome do Cliente:</label>
                    <input type="text" class="form-control" id="nomeCliente" name="nomeCliente"
                        placeholder="O Cliente deve estar cadastrado no sistema.">
                </div>
                <div class="form-group">
                    <label for="nomeAtendente">Nome do Atendente:</label>
                    <input type="text" class="form-control" id="nomeAtendente" name="nomeAtendente"
                        placeholder="O Atendente deve estar cadastrado no sistema.">
                </div>
                <div class="form-group">
                    <label for="dataCompra">Data da Compra:</label>
                    <input type="date" class="form-control" id="dataCompra" name="dataCompra">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-9">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    <div class="form-group col-md-1 ml-3">
                        <button type="button" class="btn btn-secondary" id="menuButton"
                            href='http://localhost/livraria/PHP'>Menu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    document.getElementById("menuButton").addEventListener("click", function() {
        window.location.href = "http://localhost/livraria/PHP";
    });

        $(document).ready(function () {
            function preencherDataAtual() {
                const dataAtual = new Date();
                const dia = String(dataAtual.getDate()).padStart(2, '0');
                const mes = String(dataAtual.getMonth() + 1).padStart(2, '0');
                const ano = dataAtual.getFullYear();
                const dataFormatada = `${ano}-${mes}-${dia}`;
                document.getElementById('dataCompra').value = dataFormatada;
            }

            // Autocompletar para o campo "Título do Livro"
            $('#tituloLivro').autocomplete({
                source: function (request, response) {
                    $.ajax({
                        url: '/livraria/PHP/autoComplete/tittlePriceAutoComplete.php',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            search: request.term
                        },
                        success: function (data) {
                            response(data);
                        }
                    });
                },
                minLength: 2,
                select: function (event, ui) {
                    $('#tituloLivro').val(ui.item.label);
                    $('#valorUnidade').val(ui.item.value);
                    var estoque = ui.item.estoque;
                    $('#quantidade').attr('max', estoque);
                    return false;
                }
            });

            $('#nomeCliente').autocomplete({
                source: function (request, response) {
                    $.ajax({
                        url: '/livraria/PHP/autoComplete/clientAutoComplete.php',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            search: request.term
                        },
                        success: function (data) {
                            response(data);
                        }
                    });
                },
                minLength: 2,
            });

            $('#nomeAtendente').autocomplete({
                source: function (request, response) {
                    $.ajax({
                        url: '/livraria/PHP/autoComplete/attendantAutoComplete.php',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            search: request.term
                        },
                        success: function (data) {
                            response(data);
                        }
                    });
                },
                minLength: 2,
            });

            $('#quantidade').on('input', function () {
                var estoque = parseInt($('#quantidade').attr('max'));
                var quantidadeSelecionada = parseInt($('#quantidade').val());

                if (quantidadeSelecionada > estoque) {
                    var mensagem = 'Não há livros suficiente no estoque: possui ' + estoque + ' exemplares no estoque.';
                    alert(mensagem);
                }
                else if (quantidadeSelecionada < 0){
                    var mensagem = 'Valor inadequado, coloque valores maiores que 0.'
                }
            });

            preencherDataAtual();
        });

    </script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="container-box">
            <h2 class="text-center titulo">Cadastro de Livros</h2>
            <form method="post" action="salvar/salvar_liv.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="titulo">Título do Livro:</label>
                            <input type="text" class="form-control" name="titulo" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="categoria">Categoria:</label>
                            <select class="form-control" name="categoria" required>
                                <option value="drama">Drama</option>
                                <option value="terror">Terror</option>
                                <option value="romance">Romance</option>
                                <option value="ficcao">Ficção Científica</option>
                                <option value="fantasia">Fantasia</option>
                                <option value="aventura">Aventura</option>
                                <option value="biografia">Biografia</option>
                                <option value="comedia">Comédia</option>
                                <option value="historia">História</option>
                                <option value="misterio">Mistério</option>
                                <option value="acao">Ação</option>
                                <option value="autoajuda">Autoajuda</option>
                                <option value="culinaria">Culinária</option>
                                <option value="ciencia">Ciência</option>
                                <option value="educacao">Educação</option>
                                <option value="politica">Política</option>
                                <option value="esportes">Esportes</option>
                                <option value="religiao">Religião</option>
                                <option value="ficcao_juvenil">Ficção Juvenil</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="autor">Autor:</label>
                            <input type="text" class="form-control" name="autor" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="isbn">ISBN:</label>
                            <input type="text" class="form-control" name="isbn" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" class="form-control" name="quantidade" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="editora">Editora:</label>
                            <input type="text" class="form-control" name="editora" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="valor">Valor:</label>
                            <input type="text" class="form-control" name="valor" required>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-11">
                        <button type="submit" class="btn btn-primary">Cadastrar Livro</button>
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
            display: flex;
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

        .form-group {
            margin-bottom: 20px;
            font-size: 1.2rem;
        }
    </style>
    <script>
    document.getElementById("menuButton").addEventListener("click", function() {
        window.location.href = "http://localhost/livraria/PHP";
    });
</script>
</body>

</html>
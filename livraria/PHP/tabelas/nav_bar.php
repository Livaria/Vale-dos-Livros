<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar com Bootstrap</title>
    <!-- Inclua os links para os arquivos CSS e JavaScript do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(102,166,224,1) 100%);">
        <a class="navbar-brand" href="http://localhost/livraria/PHP/">Voltar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="tlivro" href="http://localhost/livraria/PHP/tabelas/tab_livros.php">Livros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/livraria/PHP/tabelas/tab_compras.php">Compras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/livraria/PHP/tabelas/tab_clientes.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/livraria/PHP/tabelas/tab_atendentes.php">Atendentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/livraria/PHP/graficos/web_graficos.php">Graficos</a>
                </li>
            </ul>
        </div>
    </nav>



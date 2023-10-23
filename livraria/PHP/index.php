<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
</head>

<body>
    <main>
        <div class="container-menu">
            <div class="titulo">
                <h1>Vale dos Livros</h1>
            </div>
            <div class="opcoes">
                <a href="http://localhost/livraria/PHP/menu_livro.php">
                    <button class="botoes">Livros</button>
                </a>
                <a href="http://localhost/livraria/PHP/menu_cliente.php">
                    <button class="botoes">Cadastro de Clientes</button>
                </a>
                <a href="http://localhost/livraria/PHP/menu_atendente.php">
                    <button class="botoes">Cadastro de Atendentes</button>
                </a>
                <a href="http://localhost/livraria/PHP/menu_compra.php">
                    <button class="botoes">Realização da Compra</button>
                </a>
                <a href="http://localhost/livraria/PHP/tabelas/tab_livros.php">
                    <button class="botoes">Dados</button>
                </a>
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
                justify-content: flex-end;
                align-items: center;
            }

            .container-menu {
                position: relative;
                width: 100%;

                background-color: rgba(255, 255, 255, 0.1);
                padding: 20px;
                text-align: center;
                box-shadow: 0px 5px 10px black;
                border-radius: 5px;
                right: 5%;
                height: 600px;

            }

            .titulo {
                color: #ffffffe8;
                text-shadow: 0px 2px 5px black;
                font-size: 24px;
                font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                margin-top: 20px;
            }

            .opcoes {
                display: flex;
                flex-direction: column;
                gap: 40px;
                margin-top: 20px;
            }

            .botoes {
                color: #fff;
                text-shadow: black 1px 1px;
                width: 100%;
                height: 50px;
                border: none;
                background: transparent;
                box-shadow: 0px 1px 10px black;
                cursor: pointer;
                font-size: 1rem;
                text-transform: uppercase;
                font-weight: bold;
                border-radius: 8px;
            }

            .botoes:hover {
                background: rgb(87, 199, 255);
                color: #fff;
                transform: translateY(-5px);
                transition: 0.3s;
            }

            @media (min-width: 1920px) {
                .container-menu {
                    width: 600px;
                    height: 900px;
                }

                .titulo {
                    font-size: 32px;
                }

                .opcoes {
                    margin-top: 40px;
                    gap: 60px;
                }

                .botoes {
                    height: 80px;
                    font-size: 1.5rem;
                    width: 100%;
                    text-shadow: black 2px 2px;
                }
            }
        </style>
    </main>
</body>

</html>
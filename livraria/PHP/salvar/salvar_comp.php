<?php
include ("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tituloLivro = $_POST['tituloLivro'];
    $quantidade = $_POST['quantidade'];
    $valorUnidade = $_POST['valorUnidade'];
    $nomeCliente = $_POST['nomeCliente'];
    $nomeAtendente = $_POST['nomeAtendente'];
    $dataCompra = $_POST['dataCompra'];

    // Verificar se o livro existe na tabela "livro" e se há estoque suficiente.
    $sql_check = "SELECT estoque FROM livro WHERE titulo = '$tituloLivro'";
    $result = $conexao->query($sql_check);

    if ($result->num_rows > 0) {
        $livro = $result->fetch_assoc();
        $estoque = $livro['estoque'];

        if ($estoque >= $quantidade && $quantidade>0) {
            // O livro está disponível no estoque, faça a compra e calcule o valor total.
            $valorTotal = $quantidade * $valorUnidade;

            // Inserir a compra na tabela "compra" com o valor_total.
            $sql_insert_compra = "INSERT INTO compra (nome_cliente, nome_atendente, data_compra, titulo_livro, valor_unit, quantidade, valor_total) VALUES ('$nomeCliente', '$nomeAtendente', '$dataCompra', '$tituloLivro', $valorUnidade, $quantidade, $valorTotal)";

            if ($conexao->query($sql_insert_compra) === TRUE) {

                // Atualizar o estoque na tabela "livro".
                $novoEstoque = $estoque - $quantidade;
                $sql_update_estoque = "UPDATE livro SET estoque = $novoEstoque WHERE titulo = '$tituloLivro'";
                $conexao->query($sql_update_estoque);

                echo '<script>alert("Compra realizada com sucesso.");</script>';
                echo '<script>window.location.href = "../index.php";</script>';
            } else {
                echo '<script>alert("Erro ao registrar a compra: ");</script>;' . $conexao->error;
                echo '<script>window.location.href = "../menu_compra.php";</script>';
            }
        } 
        elseif ($quantidade == 0){
            echo '<script>alert("Compra não realizada, a quantidade de livros é igual a 0.");</script>';
            echo '<script>window.location.href = "../menu_compra.php";</script>';
        }
        else {
            echo '<script>alert("Compra não realizada, o valor da quantidade é negativo.");</script>';
            echo '<script>window.location.href = "../menu_compra.php";</script>';
        }
    } else {
        echo '<script>alert("Livro não encontrado ou indisponível!");</script>;';
        echo '<script>window.location.href = "../menu_compra.php";</script>';
    }
}

// Feche a conexão com o banco de dados.
$conexao->close();
?>

<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando os dados do formulário
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $autor = $_POST['autor'];
    $isbn = $_POST['isbn'];
    $quantidade = $_POST['quantidade'];
    $editora = $_POST['editora'];
    $valor = $_POST['valor'];

    // Verificar se o livro já existe no banco de dados
    $sql_select = "SELECT * FROM livro WHERE titulo = '$titulo'";
    $result = $conexao->query($sql_select);

    if ($result->num_rows > 0) {
        // O livro já existe, portanto, atualize o estoque
        $livro_existente = $result->fetch_assoc();
        $estoque_atual = $livro_existente['estoque'];
        $novo_estoque = $estoque_atual + $quantidade;

        $sql_update = "UPDATE livro SET estoque = $novo_estoque WHERE titulo = '$titulo'";
        if ($conexao->query($sql_update) === TRUE) {
            echo '<script>alert("Livro ja foi cadastrado anteriormente. O estoque será atualizado.");</script>';
            echo '<script>alert("Estoque do livro atualizado com sucesso.");</script>';
            echo '<script>window.location.href = "../index.php";</script>';
        } else {
            echo "Erro ao atualizar o estoque: " . $conexao->error;
        }
    } else {
        // O livro não existe, adicione-o ao banco de dados
        $sql_insert = "INSERT INTO livro (titulo, categoria, isbn, editora, autor, estoque, valor) 
                      VALUES ('$titulo', '$categoria', '$isbn', '$editora', '$autor', '$quantidade', '$valor')";
        
        if ($conexao->query($sql_insert) === TRUE) {
            echo '<script>alert("Livro cadastrado com sucesso.");</script>';
            echo '<script>window.location.href = "../index.php";</script>';
        } else {
            echo '<script>alert("Erro ao registrar o livro: ");</script>;' . $conexao->error;
            echo '<script>window.location.href = "../menu_livro.php";</script>';
        }
        
    }

    // Feche a conexão com o banco de dados (substitua a variável de conexão pelo seu objeto de conexão)
    $conexao->close();
}
?>

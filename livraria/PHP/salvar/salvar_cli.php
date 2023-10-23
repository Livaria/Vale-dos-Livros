<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando os dados do formulário
    $endereco = $_POST['endereco'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $dataNascimento = $_POST['data_nascimento'];
    $sexo = $_POST['sexo'];

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO cliente (endereco, nome, telefone, cpf, sexo, data_nascimento) 
            VALUES ('$endereco', '$nome', '$telefone', '$cpf', '$sexo', '$dataNascimento')";
    
    // Executar a consulta (substitua os detalhes de conexão com o banco de dados conforme necessário)
    if ($conexao->query($sql) === TRUE) {
        echo '<script>alert("Registro inserido com sucesso.");</script>';
        echo '<script>window.location.href = "../index.php";</script>';
    } 
     else {
         echo '<script>alert("Erro ao inserir registro:");</script>;' . $conexao->error;
         echo '<script>window.location.href = "../index.php";</script>';
    }

    // Fechar a conexão com o banco de dados (substitua a variável de conexão pelo seu objeto de conexão)
    $conexao->close();
}
?>

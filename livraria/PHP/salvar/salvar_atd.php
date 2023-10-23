<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando os dados do formulário
    $sexo = $_POST['sexo'];  
    $nome = $_POST['nome']; 
    $telefone = $_POST['telefone'];  
    $cpf = $_POST['cpf'];  
    $dataNascimento = $_POST['data_nascimento'];  
    $dataContrato = $_POST['data_contrato'];  
    $turno = $_POST['turno'];  

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO atendente (nome, telefone, contratacao, data_de_nascimento, turno, sexo) 
            VALUES ('$nome', '$telefone', '$dataContrato', '$dataNascimento', '$turno' , '$sexo')";
    
    // Executar a consulta (substitua os detalhes de conexão com o banco de dados conforme necessário)
    if ($conexao->query($sql) === TRUE) {
        echo '<script>alert("Registro inserido com sucesso.");</script>';
        echo '<script>window.location.href = "../index.php";</script>';
    } else {
        echo '<script>alert("Erro ao inserir registro:");</script>;' . $conexao->error;
        echo "<a href='http://localhost/livraria/PHP'>voltar</a>";
    }

    // Fechar a conexão com o banco de dados (substitua a variável de conexão pelo seu objeto de conexão)
    $conexao->close();
}
?>

<?php
$servidor = "localhost";
$username = "root";
$password = "";
$banco = "livraria_ofc";

$conexao = mysqli_connect($servidor, $username, $password, $banco);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST['search'];

    $sql = "SELECT titulo, valor, estoque FROM livro WHERE titulo LIKE '%$search%'";
    $result = $conexao->query($sql);

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $titulo = $row['titulo'];
            $valorUnidade = $row['valor'];
            $estoque = $row['estoque'];
            $data[] = array(
                'label' => $titulo,
                'value' => $valorUnidade,
                'estoque' => $estoque
            );
        }
    }

    echo json_encode($data);
}

$conexao->close();
?>
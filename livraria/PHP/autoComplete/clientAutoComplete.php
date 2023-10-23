<?php
$servidor = "localhost";
$username = "root";
$password = "";
$banco = "livraria_ofc";

$conexao = mysqli_connect($servidor, $username, $password, $banco);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST['search'];

    $sql = "SELECT nome FROM cliente WHERE nome LIKE '%$search%'";
    $result = $conexao->query($sql);

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nomeCliente = $row['nome'];
            $data[] = array(
                'label' => $nomeCliente,
            );
        }
    }

    echo json_encode($data);
}

$conexao->close();
?>
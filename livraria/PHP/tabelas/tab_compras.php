<?php
include("config2.php");
include("nav_bar.php");

$sql = "SELECT * FROM compra ORDER BY id_compra";
$result = $conexao->query($sql);
?>

<div>
    <h2 class="text-center">Compras</h2>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Nome do Cliente</th>
        <th scope="col">Nome do Atendente</th>
        <th scope="col">Data</th>
        <th scope="col">Valor_Unit</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Valor Total</th>
        <th scope="col">...</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$user_data['id_compra']."</td>";
                echo "<td>".$user_data['titulo_livro']."</td>";
                echo "<td>".$user_data['nome_cliente']."</td>";
                echo "<td>".$user_data['nome_atendente']."</td>";
                echo "<td>".$user_data['data_compra']."</td>";
                echo "<td>".$user_data['valor_unit']."</td>";
                echo "<td>".$user_data['quantidade']."</td>";
                echo "<td>".$user_data['valor_total']."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>
</div>

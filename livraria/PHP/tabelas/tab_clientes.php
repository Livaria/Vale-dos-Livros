<?php
include("config2.php");
include("nav_bar.php");

$sql = "SELECT * FROM cliente ORDER BY id_cliente";
$result = $conexao->query($sql);
?>

<div>
    <h2 class="text-center">Clientes</h2>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Endereço</th>
        <th scope="col">CPF</th>
        <th scope="col">Sexo</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">...</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$user_data['id_cliente']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['telefone']."</td>";
                echo "<td>".$user_data['endereco']."</td>";
                echo "<td>".$user_data['cpf']."</td>";
                echo "<td>".$user_data['sexo']."</td>";
                echo "<td>".$user_data['data_nascimento']."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>
</div>

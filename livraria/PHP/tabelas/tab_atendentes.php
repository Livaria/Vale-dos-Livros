<?php
include("config2.php");
include("nav_bar.php");

$sql = "SELECT * FROM atendente ORDER BY id_atendente";
$result = $conexao->query($sql);
?>

<div>
    <h2 class="text-center">Atendente</h2>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Contratação</th>
        <th scope="col">Data de nascimento</th>
        <th scope="col">Turno</th>
        <th scope="col">Sexo</th>
        <th scope="col">...</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$user_data['id_atendente']."</td>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['telefone']."</td>";
                echo "<td>".$user_data['contratacao']."</td>";
                echo "<td>".$user_data['data_de_nascimento']."</td>";
                echo "<td>".$user_data['turno']."</td>";
                echo "<td>".$user_data['sexo']."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>
</div>

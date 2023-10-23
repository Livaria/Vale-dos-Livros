<?php
include("config2.php");
include("nav_bar.php");

$sql = "SELECT * FROM livro ORDER BY id_livro";
$result = $conexao->query($sql);
?>

<div>
    <h2 class="text-center">Livros</h2>
    <table class="table">
    <thead class="thead-ligth">
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Categoria</th>
        <th scope="col">ISBN</th>
        <th scope="col">Editora</th>
        <th scope="col">Autor</th>
        <th scope="col">Estoque</th>
        <th scope="col">Valor</th>
        <th scope="col">...</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($user_data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$user_data['id_livro']."</td>";
                echo "<td>".$user_data['titulo']."</td>";
                echo "<td>".$user_data['categoria']."</td>";
                echo "<td>".$user_data['isbn']."</td>";
                echo "<td>".$user_data['editora']."</td>";
                echo "<td>".$user_data['autor']."</td>";
                echo "<td>".$user_data['estoque']."</td>";
                echo "<td>".$user_data['valor']."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    </table>
</div>

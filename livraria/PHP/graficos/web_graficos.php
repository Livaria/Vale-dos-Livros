<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar com Bootstrap</title>
    <!-- Inclua os links para os arquivos CSS e JavaScript do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(102,166,224,1) 100%);">
        <a class="navbar-brand" href="http://localhost/livraria/PHP/">Voltar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="tlivro" href="http://localhost/livraria/PHP/tabelas/tab_livros.php">Livros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/livraria/PHP/tabelas/tab_compras.php">Compras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/livraria/PHP/tabelas/tab_clientes.php">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/livraria/PHP/tabelas/tab_atendentes.php">Atendentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/livraria/PHP/graficos/web_graficos.php">Graficos</a>
                </li>
            </ul>
        </div>
    </nav>



    <!-- Conteúdo da Página -->
    <div class="container mt-4">
    <div class="row">
        <!-- Espaço 1 para Gráfico -->
        <div class="col-lg-6">
            <div id="chart1" class="secao"></div>
        </div>

        <!-- Espaço 2 para Gráfico -->
        <div class="col-lg-6">
            <div id="chart2" class="secao"></div>
        </div>
    </div>
    <div class="row">
        <!-- Espaço 3 para Gráfico -->
        <div class="col-lg-6">
            <div id="chart3" class="secao"></div>
        </div>

        <!-- Espaço 4 para Gráfico -->
        <div class="col-lg-6">
            <div id="chart4" class="secao"></div>
        </div>
    </div>
</div>

    <!-- Inclua seus scripts JavaScript para criar os gráficos aqui -->
    

    <!-- Inclua os links para as bibliotecas Bootstrap e Google Charts no final do corpo da página -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Título", "Quantidade Vendida", { role: "style" }],
          <?php
            include 'conexao.php';
            $sql = "SELECT titulo_livro, SUM(quantidade) as total_quantidade FROM compra GROUP BY titulo_livro";
            $buscar = mysqli_query($conexao, $sql);

            while ($dados = mysqli_fetch_array($buscar)) {
              $titulo_livro = $dados['titulo_livro'];
              $total_quantidade = $dados['total_quantidade'];
          ?>
          ['<?php echo $titulo_livro ?>', <?php echo $total_quantidade ?>, 'color: #337AB7'],
          <?php } ?>
        ]);

        var options = {
          title: 'Livros mais vendidos',
          chartArea: {width: '50%'},
          hAxis: {
            title: 'Quantidade Vendida',
            minValue: 0
          },
          vAxis: {
            title: ''
          }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart1'));

        chart.draw(data, options);
      }
    </script>
    <!-- chart 2 -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["sexo", "Número de Clientes"],
          <?php
            include 'conexao.php';
            $sql = "SELECT sexo, COUNT(*) as num_clientes FROM cliente GROUP BY sexo";
            $buscar = mysqli_query($conexao, $sql);

            while ($dados = mysqli_fetch_array($buscar)) {
              $sexo = $dados['sexo'];
              $num_clientes = $dados['num_clientes'];
          ?>
          ['<?php echo $sexo ?>', <?php echo $num_clientes ?>],
          <?php } ?>
        ]);

        var options = {
          title: 'Divisão de Gêneros dos Clientes',
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart2'));

        chart.draw(data, options);
      }
    </script>
    <!-- chart 3 -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["categoria", "estoque", { role: "style" } ],

        <?php
        
        include 'conexao.php';
        $sql = "SELECT * FROM livro";
        $buscar = mysqli_query($conexao, $sql);

        while ($dados = mysqli_fetch_array($buscar)) {
            $categoria = $dados ['categoria'];
            $estoque = $dados ['estoque'];
        
        ?>

        ['<?php echo $categoria ?>', <?php echo $estoque ?>, "#000000"],

        <?php } ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Categoria por nº de estoque",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("chart3"));
      chart.draw(view, options);
  }
  </script>
  <!-- chart 4 -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Atendente", "Quantidade de Livros Vendidos",],
        
        <?php
        
        include 'conexao.php';
        $sql = "SELECT nome_atendente, SUM(quantidade) AS total_quantidade FROM compra GROUP BY nome_atendente";
        $buscar = mysqli_query($conexao, $sql);
        
        while ($dados = mysqli_fetch_array($buscar)) {
            $atendente = $dados['nome_atendente'];
            $total_quantidade = $dados['total_quantidade'];
        
        ?>
        
        ['<?php echo $atendente ?>', <?php echo $total_quantidade ?>],
        
        <?php } ?>
      ]);
      
      var options = {
        title: "Atendentes com Maior Quantidade de Livros Vendidos",
        width: 600,
        height: 400,
        legend: { position: "top" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("chart4"));
      chart.draw(data, options);
    }
  </script>
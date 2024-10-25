<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JEED</title>
    <link rel="stylesheet" href="campeonatos.css">
    <script type="text/javascript" src="campeonatos.js"></script>
    <style>
      #doislados{
        display: flex;
      }
      #ladodireito{
       
        width: 40vw;
        padding: 4vh 0;
        background-color: #00192F;
      }
      #ladoesquerdo{
        
        width: 40vw;
             
      }
      td{
        
        width: 40vw;
        height: 40vh;
        
      }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="img/logoJEED.png" alt="Logo JEED">
        </div>
        <nav class="nav-menu">
            <a href="index.php">INICIO</a>
            <a href="index.php">CARACTERÍSTICAS</a>
            <a href="index.html#container4">CAMPEONATOS</a>
            <a href="index.html#contato">FALE CONOSCO</a>
        </nav>
        
    </header>
 
    <main>
        <section class="campeonatos">
            <h1>SEUS CAMPEONATOS</h1>
            
            <a href="criacao.html" class="search">Criar Campeonato</a>

            
            <hr>

            <div id="doislados">
            <div id="ladoesquerdo">
            <?php
              include 'db_connect.php';
              // Consulta SQL para buscar todos os registros, ordenados por ID em ordem decrescente
              $sql = "SELECT * FROM campeonato ORDER BY id DESC";
              $result = $conn->query($sql);


              // Verificando se há resultados
              if ($result->num_rows > 0) {
                  // Criando uma tabela HTML para organizar os dados
                  echo "<table>";
                  echo "<tr><th</th> <th>Nome do Campeonato</th><th>Data</th><th>Horário</th><th>Modalidade</th><th>Número de Equipes</th></tr>";

                  // Percorrendo os resultados e exibindo em linhas da tabela
                  while($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . $row["nomeCampeonato"] . "</td>";
                      echo "<td>" . $row["dataCampeonato"] . "</td>";
                      echo "<td>" . $row["horario"] . "</td>";
                      echo "<td>" . $row["modalidade"] . "</td>";
                      echo "<td>" . $row["numeroEquipes"] . "</td>";
                      echo "</tr>";
                  }
                  echo "</table>";
              } else {
                  echo "Não foram encontrados registros.";
              }

              $conn->close();
              ?>
              </div>

             
             <div id="ladodireito">
             <?php
              include 'db_connect.php';

              // Consultar a tabela imagens, ordenando por ID de forma decrescente
              $sql = "SELECT imagem FROM imagens ORDER BY id DESC";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                  // Percorrer todos os resultados
                  while($row = $result->fetch_assoc()) {
                      $imagem_blob = $row['imagem'];
                      $imagem_base64 = base64_encode($imagem_blob);

                      // Exibir a imagem em uma tag <img>
                      echo '<img src="data:image/jpeg;base64,' . $imagem_base64 . '" style="width: 40vw; height: 40vh; margin-top: 0.3vh; clip-path: polygon(0% 15%, 100% 15%, 100% 100%, 0% 100%);" />';
                  }
              } else {
                  echo "Nenhuma imagem encontrada.";
              }

              $conn->close();
              ?>
              </div>
              </div>

            
        </section>
    </main>

    <footer>
        <div class="footer-container">
          <div class="footer-section logo-section">
            <img src="img/logoredonda.png" alt="Logo JEED" class="footer-logo">
            <p id="contato">jeedetec@gmail.com</p>
            <a href="#">Política de privacidade</a>
          </div>
          <div class="footer-section menu-section">
            <h4>Menu</h4>
            <ul>
              <li><a href="#container">Início</a></li>
              <li><a href="#container3">Características</a></li>
              <li><a href="#container4">Campeonatos</a></li>
              <li><a href="#contato">Fale Conosco</a></li>
            </ul>
          </div>
          <div class="footer-section downloads-section">
            <h4>Redes Socias</h4>
            <p id="contato">Você pode usar nossas redes sociais para entrar em contato conosco:</p>
            <div class="download-buttons">
              <a href="#"><img src="img/face.png" alt="Facebook"></a>
              <a href="#"><img src="img/insta.png" alt="Instagram"></a>
            </div>
          </div>
        </div>
          <p class="rodapetext">© 2024 JEED. Todos os direitos reservados.</p>
        </div>
      </footer>
    
    <script type="text/javascript" src="campeonatos.js"></script>


</body>
 
</html>
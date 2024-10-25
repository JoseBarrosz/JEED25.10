<!DOCTYPE html>
<!-- PAREI AQUIIIIIIIIIIIIIIIIIIIIIIIIIIII, TEM Q ARRUMAR TAMBÉM O save_image.php -->
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaveamento</title>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <link rel="stylesheet" href="chaveamentoQueimada.css">
    <script type="text/javascript" src="chaveamentoQueimada.js" defer></script>
</head>
<body>

    <header class="header">
        <div class="logo">
            <img src="img/logoJEED.png" alt="Logo JEED">
        </div>
        <nav class="nav-menu">
            <a href="index.php">INICIO</a>
            <a href="index.php#container3">CARACTERÍSTICAS</a>
            <a href="index.php#container4">CAMPEONATOS</a>
            <a href="index.php#contato">FALE CONOSCO</a>
        </nav>
        <div class="login-button finaliza-screen">
            <a id="captureBtn" style="cursor: pointer;">FINALIZAR AGORA</a>
        </div>
        
    </header>
    
    <div class="container">
        <main>
            <h1>Chaveamento Queimada</h1>
            <div class="bracket">

                 <div class="quartas">
                    <div class="match">
                        <div class="team1">
                            <div class="team-name"></div>
                            <div class="placar1"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                        <div class="team2">
                            <div class="team-name"></div> <div class="placar2"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                    </div>
                    <div class="match">
                        <div class="team3"><div class="team-name"></div> <div class="placar1"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                        <div class="team4"><div class="team-name"></div> <div class="placar2"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                    </div>
                    <div class="match">
                        <div class="team5"><div class="team-name"></div> <div class="placar1"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                        <div class="team6"><div class="team-name"></div> <div class="placar2"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                    </div>
                    <div class="match">
                        <div class="team7"><div class="team-name"></div> <div class="placar1"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                        <div class="team8"><div class="team-name"></div> <div class="placar2"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                    </div>
                    </div>
                    <div class="linha1">
                        <img src="img/linha1.png" class="ftlinha1">

                        <div class="linha2">
                              <img src="img/linha1.png" class="ftlinha2">
                        </div>
                  </div>


                <div class="semi">
                    <div class="match2">
                        <div class="team9"><div class="team-name"></div> <div class="placar1"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                        <div class="team10"><div class="team-name"></div> <div class="placar2"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                    </div>
                    <div class="match3">
                        <div class="team11"><div class="team-name"></div> <div class="placar1"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                        <div class="team12"><div class="team-name"></div> <div class="placar2"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                    </div>
                  </div>

                  <div class="linha3">
                        <img src="img/linha3.png" class="ftlinha3">
                  </div>

                                

                <div class="final">
                    <div class="match4">
                        <div class="team13"><div class="team-name"></div> <div class="placar1"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                        <div class="team14"><div class="team-name"></div> <div class="placar2"><img src="img/setaDupla.png" class="seta-dupla"></div></div>
                    </div>
                </div>
                <div class="linha4">
                    <img src="img/linha4.png" class="ftlinha4">
              </div>
              <div class="campeao">
                <img src="img/trofeu.png" class="trofeu">
                <div class="match5">
                    <div class="team15"><div class="team-name"></div></div>
                </div>
            </div>
            </div>
            
            <!-- onde salva a imagem do print -->
            <form id="imageForm" action="salvar_imagem.php" method="POST">
                 <input type="hidden" name="imagem" id="imagem">
            </form>
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        document.getElementById('captureBtn').addEventListener('click', function() {
            console.log('Botão clicado');
            html2canvas(document.body).then(function(canvas) {
                console.log('Imagem capturada');
                var imgData = canvas.toDataURL('image/png');
                document.getElementById('imagem').value = imgData;
                console.log('Imagem convertida para base64');
                document.getElementById('imageForm').submit();
                console.log('Formulário enviado');
            }).catch(function(error) {
                console.error('Erro ao tirar print:', error);
            });
        });
    </script>
</body>

       
</html>

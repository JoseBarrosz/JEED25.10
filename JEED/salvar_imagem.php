<?php
if(isset($_POST['imagem'])) {
    $imgData = $_POST['imagem'];
    $imgData = str_replace('data:image/png;base64,', '', $imgData);
    $imgData = str_replace(' ', '+', $imgData);
    $data = base64_decode($imgData);

    // Conexão com o banco de dados
    $host = 'localhost'; // Endereço do servidor
    $usuario = 'root'; // Nome de usuário do banco de dados
    $senha = ''; // Senha do banco de dados
    $banco = 'campeonato'; // Nome do banco de dados

    // Cria a conexão
    $conn = new mysqli($host, $usuario, $senha, $banco);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    } else {
        echo "Conexão bem-sucedida!";
    }

    // Salva a imagem como LONGBLOB no banco de dados
    $stmt = $conn->prepare("INSERT INTO imagens (imagem) VALUES (?)");
    $stmt->bind_param('b', $data);
    $stmt->send_long_data(0, $data);

    if ($stmt->execute()) {
        header('Location: campeonatos.php');
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

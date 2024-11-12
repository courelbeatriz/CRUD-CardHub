<?php
// Inclui o arquivo de conexão com o banco de dados
require_once("dbConnection.php");

// Verifica se o formulário foi enviado (quando o botão "update" é pressionado)
if (isset($_POST['update'])) 
{
    // Obtém o ID do cartão a ser atualizado
    $id = $_POST['id'];  // ID do formulário enviado

    // Escapa caracteres especiais para evitar injeção de SQL, tratando os dados recebidos do formulário
    $Nometitular = mysqli_real_escape_string($mysqli, $_POST['Nometitular']);  
    $NumerodoCartao = mysqli_real_escape_string($mysqli, $_POST['NumerodoCartao']);     
    $Datadevalidade = mysqli_real_escape_string($mysqli, $_POST['Datadevalidade']);
    $Tipo = mysqli_real_escape_string($mysqli, $_POST['Tipo']);
    $CVV = mysqli_real_escape_string($mysqli, $_POST['CVV']); 
    $Bandeira = mysqli_real_escape_string($mysqli, $_POST['Bandeira']);

    // Verifica se algum campo está vazio
    if (empty($Nometitular) || empty($NumerodoCartao) || empty($Datadevalidade) || empty($Tipo) || empty($CVV) || empty($Bandeira)) {
        // Se o campo 'name' estiver vazio, exibe uma mensagem de erro
        if (empty($Nometitular)) {
            echo "<div class='error'>Nometitular field is empty.</div>";
        }

        // Se o campo 'NumerodoCartao' estiver vazio, exibe uma mensagem de erro
        if (empty($NumerodoCartao)) {
            echo "<div class='error'>NumerodoCartao field is empty.</div>";
        }

        // Se o campo 'Datadevalidade' estiver vazio, exibe uma mensagem de erro
        if (empty($Datadevalidade)) {
            echo "<div class='error'>Datadevalidade field is empty.</div>";
        }    

        // Se o campo 'Tipo' estiver vazio, exibe uma mensagem de erro
        if (empty($Tipo)) {
            echo "<div class='error'>Tipo field is empty.</div>";
        }

        // Se o campo 'CVV' estiver vazio, exibe uma mensagem de erro
        if (empty($CVV)) {
            echo "<div class='error'>CVV field is empty.</div>";
        }

        // Se o campo 'Bandeira' estiver vazio, exibe uma mensagem de erro
        if (empty($Bandeira)) {
            echo "<div class='error'>Bandeira field is empty.</div>";
        }

    } else {
        // Se todos os campos forem preenchidos, realiza a atualização no banco de dados
        $result = mysqli_query($mysqli, "UPDATE users SET `Nometitular` = '$Nometitular', `NumerodoCartao` = '$NumerodoCartao', `Datadevalidade` = '$Datadevalidade', `Tipo` = '$Tipo', `CVV` = '$CVV', `Bandeira` = '$Bandeira' WHERE `id` = $id");
        
        // Exibe uma mensagem de sucesso após a atualização dos dados
        echo "<div class='success'>Dados atualizados com sucesso!</div>";
        // Link para retornar à página principal (onde os resultados são exibidos)
        echo "<a href='index.php' class='button'>Ver cartões</a>";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>~Update data!</title> <!-- Título da página -->
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #101728; /* Alterado para combinar com o segundo estilo */
        margin: 0;
        padding: 20px;
    }
    h2 {
        text-align: center;
        color: #fff; /* Alterado para branco */
        font-size: 3em; /* Ajustado para o mesmo tamanho */
        margin-bottom: 2em; /* Ajustado para o mesmo espaçamento */
        filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff); /* Adicionado efeito de sombra */
    }
    .error {
        color: red;
        text-align: center;
        margin: 10px 0;
        font-weight: bold;
        filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff); /* Adicionado efeito de sombra */
    }
    .success {
        color: #9340ff;
        text-align: center;
        margin: 10px 0;
        font-weight: bold;
        filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff); /* Adicionado efeito de sombra */
    }
    a {
        text-decoration: none;
        color: #007BFF; /* Mantido o azul padrão */
        display: inline-block;
        margin-top: 10px;
        padding: 10px 15px;
        color: white; /* Texto em branco */
        border-radius: 5px; /* Mantido o arredondamento */
        transition: background-color 0.3s; /* Transição suave */
        filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff); /* Adicionado efeito de sombra */
    }
    a:hover {
        background-color: #0056b3; /* Mantido o efeito hover */
    }
</style>
</head>
<body>
    <h2>Cartão atualizado!</h2>
</body>
</html>
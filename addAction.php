<?php
// Inclui o arquivo de conexão com o banco de dados
require_once("dbConnection.php");

// Verifica se o formulário foi enviado (quando o botão 'submit' é pressionado)
if (isset($_POST['submit'])) {
    // Escapa caracteres especiais para evitar injeção de SQL, tratando os dados recebidos do formulário
    $Nometitular = mysqli_real_escape_string($mysqli, $_POST['Nometitular']);
    $NumerodoCartao = mysqli_real_escape_string($mysqli, $_POST['NumerodoCartao']);
    $Datadevalidade = mysqli_real_escape_string($mysqli, $_POST['Datadevalidade']);
    $Tipo = mysqli_real_escape_string($mysqli, $_POST['Tipo']);
    $CVV = mysqli_real_escape_string($mysqli, $_POST['CVV']);
    $Bandeira = mysqli_real_escape_string($mysqli, $_POST['Bandeira']);

    // Verifica se algum campo está vazio
    if (empty($Nometitular) || empty($NumerodoCartao) || empty($Datadevalidade) || empty($Tipo) || empty($CVV) || empty($Bandeira)) {
        // Se algum campo estiver vazio, exibe uma mensagem de erro
        if (empty($Nometitular)) {
            echo "<div class='error'>Nometitular field is empty.</div>";
        }
        if (empty($NumerodoCartao)) {
            echo "<div class='error'>NumerodoCartao field is empty.</div>";
        }
        if (empty($Datadevalidade)) {
            echo "<div class='error'>Datadevalidade field is empty.</div>";
        }
        if (empty($Tipo)) {
            echo "<div class='error'>Tipo field is empty.</div>";
        }
        if (empty($CVV)) {
            echo "<div class='error'>CVV field is empty.</div>";
        }
        if (empty($Bandeira)) {
            echo "<div class='error'>Bandeira field is empty.</div>";
        }

        // Exibe um link para voltar à página anterior
        echo "<div class='back-link'><a href='javascript:self.history.back();'>Go Back</a></div>";
    } else {
        // Se todos os campos estiverem preenchidos (não estiverem vazios)
        // Insere os dados no banco de dados
        $result = mysqli_query($mysqli, "INSERT INTO users (`Nometitular`, `NumerodoCartao`, `Datadevalidade`,`Tipo`,`CVV`,`Bandeira`) 
                                         VALUES ('$Nometitular', '$NumerodoCartao', '$Datadevalidade','$Tipo', '$CVV', '$Bandeira')");

        // Exibe uma mensagem de sucesso após a inserção dos dados
        echo "<div class='success'>Cartão adicionado com sucesso!</div>";
        // Link para redirecionar para a página principal, onde os dados podem ser visualizados
        echo "<a href='index.php' class='button'>Ver cartões</a>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #101728; /* Cor de fundo escura */
            margin: 0;
            padding: 20px;
            color: #fff;
        }
        h2 {
            text-align: center;
            color: #fff; 
            font-size: 3em;
            margin-bottom: 2em;
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
        }
        a {
            text-decoration: none;
            color: #fff; /* Mudando a cor do texto para branco */
        }
        a:hover {
            text-decoration: underline;
        }
        button {
            background: linear-gradient(to right, #9340ff, #ff3c5f);
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
            border: none;
            border-radius: 30px;
            color: #fff;
            padding: 1em 3em;
            cursor: pointer;
        }
        .form-container {
            background-color:#101728;
            padding: 20px;
            border-radius: 5px;
            max-width: 500px;
            margin: 20px auto;
            color:#fff;
        }
        .form-container table {
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
            width: 100%;
        }
        .form-container td {
            padding: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background: linear-gradient(to right, #9340ff, #ff3c5f);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 20px;
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .success {
            color: #9340ff;
            text-align: center;
            margin: 10px 0;
            font-weight: bold;
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
        }
        .error {
            color: red;
            text-align: center;
            margin: 10px 0;
            font-weight: bold;
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
        }
        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        /* Estilizando o botão "Adicionar" para centralizar */
        .form-container td[colspan="3"] {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>CardHub</h2> <!-- Cabeçalho da página -->
    <div class="form-container">
        <!-- Formulário para adicionar um cartão -->
        <form name="add" method="post" action="addAction.php">
            <table border="0">
                <tr>
                    <td>Nome titular</td>
                    <td><input type="text" name="Nometitular" required></td>
                </tr>
                <tr>
                    <td>Número do cartão</td>
                    <td><input type="text" name="NumerodoCartao" required></td>
                </tr>
                <tr>
                    <td>Data de validade</td>
                    <td><input type="text" name="Datadevalidade" required></td>
                </tr>
                <tr>
                    <td>Tipo</td>
                    <td><input type="text" name="Tipo" required></td>
                </tr>
                <tr>
                    <td>CVV</td>
                    <td><input type="text" name="CVV" required></td>
                </tr>
                <tr>
                    <td>Bandeira</td>
                    <td><input type="text" name="Bandeira" required></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="submit" name="submit" value="Adicionar">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

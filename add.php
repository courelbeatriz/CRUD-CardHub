<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Card</title> <!-- Título da página -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #101728;
            margin: 0;
            padding: 20px;
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
            color: #007BFF;
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
        form {
            background-color:#101728;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            margin: 20px auto;
            color:#fff;
        }
        table {
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
            width: 100%;
        }
        td {
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
            filter: drop-shadow(0 0 px #9340ff) drop-shadow(0 0 25px #9340ff);
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h2>CardHub</h2> <!-- Cabeçalho da página, indicando que é a seção de adição de dados -->
    <p style="text-align: center;">
        <!-- Link para a página inicial, redirecionando o usuário para 'index.php' -->
        <a href="index.php"><button>Voltar</button></a>
    </p>

    <!-- Formulário para adicionar novos dados ao banco de dados -->
    <form action="addAction.php" method="post" name="add"> <!-- Formulário enviado via POST para a página addAction.php -->
        <table>
            <tr> 
                <td>Nome titular</td> <!-- Rótulo (label) para o campo de nome -->
                <td><input type="text" name="Nometitular" required></td> <!-- Campo de texto para o nome do usuário -->
            </tr>
            <tr> 
                <td>Número do Cartão</td> <!-- Rótulo (label) para o campo Número do Cartão -->
                <td><input type="text" name="NumerodoCartao" required></td> <!-- Campo de texto para a idade do usuário -->
            </tr>
            <tr> 
                <td>Data de validade</td> <!-- Rótulo (label) para o campo Data de validade -->
                <td><input type="text" name="Datadevalidade" required></td> <!-- Campo de texto para o e-mail do usuário -->
            </tr>
            <tr> 
                <td>Tipo</td> <!-- Rótulo (label) para o campo Tipo -->
                <td><input type="text" name="Tipo" required></td> <!-- Campo de texto para o e-mail do usuário -->
            </tr>
            <tr> 
                <td>CVV</td> <!-- Rótulo (label) para o campo CVV -->
                <td><input type="text" name="CVV" required></td> <!-- Campo de texto para o e-mail do usuário -->
            </tr>
            <tr> 
                <td>Bandeira</td> <!-- Rótulo (label) para o campo Bandeira -->
                <td><input type="text" name="Bandeira" required></td> <!-- Campo de texto para o e-mail do usuário -->
            </tr>
            <tr> 
                <td></td> <!-- Célula vazia (não exibe nada) -->
                <td><input type="submit" name="submit" value="Adicionar"></td> <!-- Botão de envio do formulário com o valor 'Add' -->
            </tr>
        </table>
    </form>
</body>
</html>
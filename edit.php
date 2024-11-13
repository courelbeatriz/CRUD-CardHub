<?php
// Inclui o arquivo de conexão com o banco de dados
require_once("dbConnection.php");

// Obtém o ID do usuário a ser editado a partir do parâmetro na URL (GET)
$id = $_GET['id'];

// Executa uma consulta SQL para selecionar os dados do usuário com o ID correspondente
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Recupera os dados retornados pela consulta como um array associativo
$resultData = mysqli_fetch_assoc($result);


$Nometitular = $resultData['Nometitular'];
$NumerodoCartao = $resultData['NumerodoCartao'];
$Datadevalidade = $resultData['Datadevalidade'];
$Tipo = $resultData['Tipo'];
$CVV = $resultData['CVV'];
$Bandeira = $resultData['Bandeira'];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Card</title> <!-- Título da página -->
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
    <h2>CardHub</h2> <!-- Cabeçalho da página -->
    <p style="text-align: center;">
        <!-- Link para retornar à página inicial -->
        <a href="index.php"><button>Voltar</button></a>
    </p>
	
	<!-- Formulário para editar os dados do usuário -->
	<form name="edit" method="post" action="editAction.php">
		<table border="0"> <!-- Tabela para exibir os campos do formulário -->
			<tr> 
				<td>Nome titular</td> 
				<td><input type="text" name="Nometitular" value="<?php echo htmlspecialchars($Nometitular); ?>" required></td> <!-- Campo de entrada para o nome, com valor preenchido com o nome atual do usuário -->
			</tr>
			<tr> 
				<td>Número do cartão</td>
				<td><input type="text" name="NumerodoCartao" value="<?php echo htmlspecialchars($NumerodoCartao); ?>" required></td>
			</tr>
			<tr> 
				<td>Data de validade</td> 
				<td><input type="text" name="Datadevalidade" value="<?php echo htmlspecialchars($Datadevalidade); ?>" required></td> 
			</tr>
            <tr> 
				<td>Tipo</td> 
				<td><input type="text" name="Tipo" value="<?php echo htmlspecialchars($Tipo); ?>" required></td> 
            <tr> 
				<td>CVV</td> 
				<td><input type="text" name="CVV" value="<?php echo htmlspecialchars($CVV); ?>" required></td> 
            <tr> 
				<td>Bandeira</td> 
				<td><input type="text" name="Bandeira" value="<?php echo htmlspecialchars($Bandeira); ?>" required></td> 
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $id; ?>"></td> <!-- Campo oculto que armazena o ID do usuário (não visível para o usuário, mas necessário para identificar o registro no banco de dados) -->
				<td><input type="submit" name="update" value="Atualizar"></td> <!-- Botão de envio do formulário (para atualizar os dados) -->
			</tr>
		</table>
	</form>
</body>
</html>

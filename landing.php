<?php
// Inclui o arquivo de conexão com o banco de dados.
require_once("dbConnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARDHUB</title>
    <style>
        body {
            background-color: #101728;
            color: #fff;
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            font-size: 4em;
            margin-bottom: 2em;
            color: #fff; 
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
        }

        button {
            background: linear-gradient(to right, #9340ff, #ff3c5f);
            filter: drop-shadow(0 0 5px #9340ff) drop-shadow(0 0 25px #9340ff);
            border: none;
            border-radius: 30px;
            color: #fff;
            font-size: 1.2em;
            padding: 1em 3em;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>CARDHUB</h1>
    <a href="index.php"><button>Iniciar</button></a>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Confirmação de Agendamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #80d2ddff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .resumo {
            background: whitesmoke;
            padding: 25px 35px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 420px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        p {
            margin: 8px 0;
            color: #555;
        }
        strong {
            color: #000;
        }
        .botoes {
            text-align: center;
            margin-top: 25px;
        }
        .botao-voltar {
            display: inline-block;
            background: #17a4e6ff;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }
        .botao-voltar:hover {
            background: #95b3ccff;
        }
    </style>
</head>
<body>
    <div class="resumo">
        <h2>Resumo do Agendamento</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars($_POST["nome"]);
            $telefone = htmlspecialchars($_POST["telefone"]);
            $aparelho = htmlspecialchars($_POST["aparelho"]);
            $data = htmlspecialchars($_POST["data"]);
            $descricao = htmlspecialchars($_POST["descricao"]);

            echo "<p><strong>Nome do Cliente:</strong> $nome</p>";
            echo "<p><strong>Telefone:</strong> $telefone</p>";
            echo "<p><strong>Aparelho:</strong> $aparelho</p>";
            echo "<p><strong>Data Preferida:</strong> " . date("d/m/Y", strtotime($data)) . "</p>";
            echo "<p><strong>Descrição do Problema:</strong> $descricao</p>";
        } else {
            echo "<p>Nenhum dado recebido.</p>";
        }
        ?>
        <div class="botoes">
            <a href="index.php" class="botao-voltar">← Voltar e fazer novo agendamento</a>
        </div>
    </div>
</body>
</html>

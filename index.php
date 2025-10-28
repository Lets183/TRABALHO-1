<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Agendamento de Conserto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #a3d6ddff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 25px 35px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(39, 240, 173, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #22a584ff;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #42d4d4be;
        }
        input, select, textarea, button {
            width: 100%;
            margin-top: 5px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #77b5dfff;
            box-sizing: border-box;
        }
        button {
            background: #90d6dbff;
            color: white;
            border: none;
            margin-top: 15px;
            cursor: pointer;
        }
        button:hover {
            background: #34c3e7ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Agende seu Conserto</h2>
        <form action="index2.php" method="POST">
            <label for="nome">Nome do cliente:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="telefone">Telefone para contato:</label>
            <input type="tel" id="telefone" name="telefone" required placeholder="(xx) xxxxx-xxxx">

            <label for="aparelho">Tipo de aparelho:</label>
            <select id="aparelho" name="aparelho" required>
                <option value="">Selecione</option>
                <option value="Geladeira">Geladeira</option>
                <option value="Micro-ondas">Micro-ondas</option>
                <option value="Máquina de Lavar">Máquina de Lavar</option>
                <option value="Fogão">Fogão</option>
                <option value="Frigobar">Frigobar</option>
                <option value="Ar-condicionado">Ar-condicionado</option>
            </select>

            <label for="data">Data preferida para atendimento:</label>
            <input type="date" id="data" name="data" required>

            <label for="descricao">Descrição do problema:</label>
            <textarea id="descricao" name="descricao" rows="4" required></textarea>

            <button type="submit">Agendar</button>
        </form>
    </div>
</body>
</html>

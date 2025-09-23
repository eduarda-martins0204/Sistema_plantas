<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .form-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #4CAF50;
            font-size: 2em;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Sistema Plantas 🌱</h1>
        <form method="POST" action="/sistemaplantas/index.php?param=usuario/inserir">
            <label>Nome: </label>
            <input type="text" name="nome" value="<?= ($parametro != null) ? $parametro[0]["nome"] : "" ?>" />
            <br />
            <label>E-mail: </label>
            <input type="email" name="email" value="<?= ($parametro != null) ? $parametro[0]["email"] : "" ?>" />
            <br />
            <?php if ($parametro != null) { ?>
                <input type="hidden" name="id" value="<?= $parametro[0]["id"] ?>" />
            <?php } ?>
            <input type="submit" value="enviar" />
        </form>
    </div>
</body>
</html>

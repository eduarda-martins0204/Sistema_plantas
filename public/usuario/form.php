<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuário</title>
</head>
<body>
    <h1>Sistema Plantas 🌱</h1>
    <form method="POST" action="/sistemaplantas/index.php?param=usuario/inserir">
        <label>Nome: </label>
        <input type="text" name="nome" required
            value="<?= isset($parametro) ? $parametro[0]["nome"] : "" ?>" />
        <br />

        <label>E-mail: </label>
        <input type="email" name="email" required
            value="<?= isset($parametro) ? $parametro[0]["email"] : "" ?>" />
        <br />

        <label>Senha: </label>
        <input type="password" name="senha" required />
        <br />

        <?php
        if (isset($parametro) && $parametro != null) {
        ?>
            <input type="hidden" name="id" value="<?= $parametro[0]["id"] ?>" />
        <?php
        }
        ?>

        <input type="submit" value="enviar" />
    </form>
</body>
</html>

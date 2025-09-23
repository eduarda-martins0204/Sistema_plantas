<form method="POST" action="/mvc20251/usuario/inserir">
    <label>Nome: </label>
    <input type="text" name="nome"
        value="<?= ($parametro != null) ? $parametro[0]["nome"] : "" ?>" />
    <br />

    <label>E-mail: </label>
    <input type="text" name="email"
        value="<?= ($parametro != null) ? $parametro[0]["email"] : "" ?>" />
    <br />

    <?php
    if ($parametro != null) {
    ?>
        <input type="hidden" name="id" value="<?= $parametro[0]["id"] ?>" />
    <?php
    }
    ?>

    <input type="submit" value="enviar" />
</form>

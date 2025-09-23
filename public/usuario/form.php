<form method="POST" action="/mvc20251/planta/inserir">
    <label>Nome: </label>
    <input type="text" name="nome" 
        value="<?= ($parametro != null) ? $parametro[0]["nome"] : "" ?>" />
    <br />

    <label>Espécie: </label>
    <input type="text" name="especie" 
        value="<?= ($parametro != null) ? $parametro[0]["especie"] : "" ?>" />
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

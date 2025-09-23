<form method="POST" action="/sistemaplantas/index.php?param=planta/inserir">
    <label>Nome Científico: </label>
    <input type="text" name="nome_cientifico"
        value="<?= ($parametro != null) ? $parametro[0]["nome_cientifico"] : "" ?>" />
    <br />

    <label>Nome Popular: </label>
    <input type="text" name="nome_popular"
        value="<?= ($parametro != null) ? $parametro[0]["nome_popular"] : "" ?>" />
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

<form method="POST" action="/sistemaplantas/cuidado/inserir">
    <label>Descrição: </label>
    <input type="text" name="descricao" 
        value="<?= ($parametro != null) ? $parametro[0]["descricao"] : "" ?>" />
    <br />

    <label>Frequência: </label>
    <input type="text" name="frequencia" 
        value="<?= ($parametro != null) ? $parametro[0]["frequencia"] : "" ?>" />
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

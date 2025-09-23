<form method="POST" action="/sistemaplantas/index.php?param=cuidado/inserir">
    <label>ID do Usuário: </label>
    <input type="number" name="usuario_id" 
        value="<?= ($parametro != null) ? $parametro[0]["usuario_id"] : "" ?>" />
    <br />

    <label>ID da Planta: </label>
    <input type="number" name="planta_id" 
        value="<?= ($parametro != null) ? $parametro[0]["planta_id"] : "" ?>" />
    <br />
    
    <label>Tipo de Cuidado: </label>
    <input type="text" name="tipo_cuidado" 
        value="<?= ($parametro != null) ? $parametro[0]["tipo_cuidado"] : "" ?>" />
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

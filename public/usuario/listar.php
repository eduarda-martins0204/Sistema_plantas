<a href="/mvc20251/planta/formulario">Cadastrar</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Espécie</th>
        <th>Ações</th>
    </tr>
<?php
foreach( $parametro as $p){
    ?>
    <tr>
        <td><?= $p["id"] ?></td>
        <td><?= $p["nome"] ?></td>
        <td><?= $p["especie"] ?></td>
        <td><a href="/mvc20251/planta/formularioalterar?id=<?= $p["id"] ?>">Alterar</a></td>
    </tr>
    <?php
}
?>
</table>

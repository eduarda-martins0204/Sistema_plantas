<a href="/sistemaplantas/cuidado/formulario">Cadastrar</a>
<table>
    <tr>
        <th>ID</th>
        <th>Usuário ID</th>
        <th>Planta ID</th>
        <th>Tipo de Cuidado</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($parametro as $p) { ?>
    <tr>
        <td><?= $cuidado["id"] ?></td>
        <td><?= $cuidado["usuario_id"] ?></td>
        <td><?= $cuidado["planta_id"] ?></td>
        <td><?= $cuidado["tipo_cuidado"] ?></td>
        <td><a href="/sistemaplantas/cuidado/formularioalterar?id=<?= $p["id"] ?>">Alterar</a></td>
    </tr>
    <?php } ?>
</table>





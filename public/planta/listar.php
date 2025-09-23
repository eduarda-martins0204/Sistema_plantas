<a href="/sistemaplantas/planta/formulario">Cadastrar</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nome Científico</th>
        <th>Nome Popular</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($parametro as $p) { ?>
    <tr>
        <td><?= $planta["id"] ?></td>
        <td><?= $planta["nome_cientifico"] ?></td>
        <td><?= $planta["nome_popular"] ?></td>
        <td><a href="/sistemaplantas/planta/formularioalterarid=<?= $p["id"] ?>">Alterar</a></td>
    </tr>
    <?php } ?>
</table>


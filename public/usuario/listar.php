<a href="/sistemaplantas/usuario/formulario">Cadastrar</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($parametro as $p) { ?>
    <tr>
        <td><?= $usuario["id"] ?></td>
        <td><?= $usuario["nome"] ?></td>
        <td><?= $usuario["email"] ?></td>
        <td><a href="/sistemaplantas/usuario/formularioalerar?id=<?= $p["id"] ?>">Alterar</a></td>
    </tr>
    <?php } ?>
</table>


<a href="/sistemaplantas/index.php?param=usuario/formulario">Cadastrar</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($resultado as $usuario) { ?>
    <tr>
        <td><?= $usuario["id"] ?></td>
        <td><?= $usuario["nome"] ?></td>
        <td><?= $usuario["email"] ?></td>
        <td><a href="/sistemaplantas/index.php?param=usuario/alterarForm&id=<?= $usuario["id"] ?>">Alterar</a></td>
    </tr>
    <?php } ?>
</table>
